<?php

declare(strict_types=1);

namespace Fop\Core\Geolocation;

use Fop\Core\ValueObject\Option;
use Fop\Meetup\ValueObject\Location;
use GuzzleHttp\Client;
use Location\Coordinate;
use Nette\Utils\Json;
use Psr\Http\Message\ResponseInterface;
use Rinvex\Country\Country;
use Rinvex\Country\CountryLoader;
use Symplify\PackageBuilder\Parameter\ParameterProvider;

/**
 * @see \Fop\Core\Tests\Geolocator\GeolocatorTest
 */
final class Geolocator
{
    /**
     * @var string
     */
    private const API_CITY_TO_LOCATION = 'https://nominatim.openstreetmap.org/search.php?q=%s&format=json';

    /**
     * @var string
     */
    private const API_LOCATION_TO_COUNTRY = 'https://nominatim.openstreetmap.org/reverse?format=json&lat=%s&lon=%s';
    /**
     * @var string
     */
    private const LAT = 'lat';
    /**
     * @var string
     */
    private const ADDRESS = 'address';
    /**
     * @var string
     */
    private const COUNTRY = 'country';
    /**
     * @var string
     */
    private const STATE = 'state';

    /**
     * @var mixed[]
     */
    private array $countryJsonByLatitudeAndLongitudeCache = [];

    /**
     * @var string[]
     */
    private array $usaStates = [];

    public function __construct(
        ParameterProvider $parameterProvider,
        private Client $client
    ) {
        $this->usaStates = $parameterProvider->provideArrayParameter(Option::USA_STATES);
    }

    public function createLocationFromCity(string $city): ?Location
    {
        $url = sprintf(self::API_CITY_TO_LOCATION, $city);

        $response = $this->client->get($url);
        $json = $this->createJsonFromResponse($response);

        if (! isset($json[0][self::LAT]) || ! isset($json[0][self::LAT])) {
            return null;
        }

        $lat = (float) $json[0][self::LAT];
        $lon = (float) $json[0]['lon'];

        $country = $this->resolveCountryByLatitudeAndLongitude($lat, $lon);

        return new Location($city, $country, new Coordinate($lat, $lon));
    }

    /**
     * @param mixed[] $venue
     */
    public function resolveCountryByVenue(array $venue): string
    {
        if ($venue['localized_country_name'] !== 'USA') {
            return $venue['localized_country_name'];
        }

        if (isset($venue[self::STATE])) {
            $stateCode = strtolower($venue[self::STATE]);
            if (isset($this->usaStates[$stateCode])) {
                return $this->usaStates[$stateCode];
            }
        }

        return $this->resolveCountryByLatitudeAndLongitude($venue[self::LAT], $venue['lon']);
    }

    /**
     * @return mixed[]
     */
    public function getCountryJsonByLatitudeAndLongitude(float $latitude, float $longitude): array
    {
        $cacheKey = sha1($longitude . $longitude);
        if (isset($this->countryJsonByLatitudeAndLongitudeCache[$cacheKey])) {
            return $this->countryJsonByLatitudeAndLongitudeCache[$cacheKey];
        }

        $url = sprintf(self::API_LOCATION_TO_COUNTRY, $latitude, $longitude);
        $response = $this->client->get($url);

        $json = $this->createJsonFromResponse($response);

        $this->countryJsonByLatitudeAndLongitudeCache[$cacheKey] = $json;

        return $json;
    }

    /**
     * @param mixed[] $group
     */
    public function resolveCountryByGroup(array $group): ?string
    {
        // Special case for USA, since there are many federate states
        if (isset($group[self::COUNTRY]) && $group[self::COUNTRY] === 'US') {
            $stateCode = strtolower($group[self::STATE]);

            if (isset($this->usaStates[$stateCode])) {
                return $this->usaStates[$stateCode];
            }

            // unknown state :(, fallback
        }

        $countryCode = $this->resolveCountryCodeFromGroup($group);
        $countryOrCountries = CountryLoader::country($countryCode);

        if (is_array($countryOrCountries)) {
            /** @var Country $country */
            $country = array_pop($countryOrCountries);

            return $country->getName();
        }

        return $countryOrCountries->getName();
    }

    private function resolveCountryByLatitudeAndLongitude(float $latitude, float $longitude): string
    {
        $countryJson = $this->getCountryJsonByLatitudeAndLongitude($latitude, $longitude);

        if ($countryJson[self::ADDRESS][self::COUNTRY] === 'USA') {
            return $countryJson[self::ADDRESS][self::STATE];
        }

        $countryCode = $countryJson[self::ADDRESS]['country_code'];
        if ($countryCode) {
            // get English name
            $country = CountryLoader::country($countryCode);
            if (is_array($country)) {
                $country = array_pop($country);
            }

            return $country->getName();
        }

        return $countryJson[self::ADDRESS]['countrymp'];
    }

    /**
     * @see https://stackoverflow.com/a/45826290/1348344
     *
     * @param mixed[] $group
     */
    private function resolveCountryCodeFromGroup(array $group): string
    {
        if (isset($group[self::COUNTRY]) && $group[self::COUNTRY] && $group[self::COUNTRY] !== '-') {
            return $group[self::COUNTRY];
        }

        $countryJson = $this->getCountryJsonByLatitudeAndLongitude($group['latitude'], $group['longitude']);

        return $countryJson[self::ADDRESS]['country_code'];
    }

    /**
     * @return mixed[]
     */
    private function createJsonFromResponse(ResponseInterface $response): array
    {
        $responseBody = (string) $response->getBody();
        return Json::decode($responseBody, Json::FORCE_ARRAY);
    }
}
