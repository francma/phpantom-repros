<?php

use Repro\Contract;
use Repro\Production;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();
    $services->set(Production::class)->public();
    $services->alias(Contract::class, Production::class)->public();
};
