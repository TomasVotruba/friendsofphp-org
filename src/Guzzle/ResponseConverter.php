<?php

declare(strict_types=1);

namespace Fop\Core\Guzzle;

use Nette\Utils\Json;
use Psr\Http\Message\ResponseInterface;

final class ResponseConverter
{
    /**
     * @return mixed[]
     */
    public function toJson(ResponseInterface $response): array
    {
        return Json::decode((string) $response->getBody(), Json::FORCE_ARRAY);
    }
}
