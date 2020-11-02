<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('twig', [
        'debug' => '%kernel.debug%',
    ]);

    $containerConfigurator->extension('twig', [
        'strict_variables' => '%kernel.debug%',
    ]);

    $containerConfigurator->extension('twig', [
        'globals' => [
            'max_forecast_days' => '%max_forecast_days%',
            'map_id' => 'mapid',
        ],
    ]);
};
