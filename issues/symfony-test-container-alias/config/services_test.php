<?php

use Repro\Contract;
use Repro\InMemory;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();
    $services->set(InMemory::class)->public();
    $services->alias(Contract::class, InMemory::class)->public();
    $services->set('repro.in_memory', InMemory::class)->public();
};
