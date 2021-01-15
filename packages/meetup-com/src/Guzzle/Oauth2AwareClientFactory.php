<?php

declare(strict_types=1);

namespace Fop\MeetupCom\Guzzle;

use Fop\Core\Exception\ShouldNotHappenException;
use Fop\Core\ValueObject\Option;
use GuzzleHttp\Client;
use kamermans\OAuth2\GrantType\ClientCredentials;
use kamermans\OAuth2\OAuth2Middleware;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Strings\StringFormatConverter;

final class Oauth2AwareClientFactory
{
    private string $meetupComOauthKey;

    private string $meetupComOauthSecret;

    public function __construct(
        ParameterProvider $parameterProvider,
        private StringFormatConverter $stringFormatConverter
    ) {
        $this->meetupComOauthKey = $parameterProvider->provideStringParameter(Option::MEETUP_COM_OAUTH_KEY);
        $this->meetupComOauthSecret = $parameterProvider->provideStringParameter(Option::MEETUP_COM_OAUTH_SECRET);
    }

    /**
     * @see https://github.com/kamermans/guzzle-oauth2-subscriber#middleware-guzzle-6
     */
    public function create(): Oauth2AwareClient
    {
        $this->ensureOAuthKeysAreSet();

        $reauthClient = new Client([
            // URL for access_token request
            'base_uri' => 'https://secure.meetup.com/oauth2/access',
        ]);

        $reauthConfig = [
            'client_id' => $this->meetupComOauthKey,
            'client_secret' => $this->meetupComOauthSecret,
        ];

        $clientCredentials = new ClientCredentials($reauthClient, $reauthConfig);
        $oAuth2Middleware = new OAuth2Middleware($clientCredentials);

        return $this->decorateWithOauth2Client($oAuth2Middleware);
    }

    private function ensureOAuthKeysAreSet(): void
    {
        if ($this->meetupComOauthKey === 'empty') {
            $envValueName = $this->convertPropertyNameToEnvName('meetupComOauthKey');

            throw new ShouldNotHappenException(sprintf(
                'Env "%s" is needed to run this. Add it to CI or "%s=VALUE bin/console ..."',
                $envValueName,
                $envValueName
            ));
        }

        if ($this->meetupComOauthSecret === 'empty') {
            $envValueName = $this->convertPropertyNameToEnvName('meetupComOauthSecret');

            throw new ShouldNotHappenException(sprintf(
                'Env "%s" is needed to run this. Add it to CI or "%s=VALUE bin/console ..."',
                $envValueName,
                $envValueName
            ));
        }
    }

    private function convertPropertyNameToEnvName(string $name): string
    {
        $underscore = $this->stringFormatConverter->camelCaseToUnderscore($name);

        return strtoupper($underscore);
    }

    private function decorateWithOauth2Client(OAuth2Middleware $oAuth2Middleware): Oauth2AwareClient
    {
        $oauth2AwareClient = new Oauth2AwareClient();
        $config = $oauth2AwareClient->getConfig('handler');
        $config->push($oAuth2Middleware);

        return $oauth2AwareClient;
    }
}
