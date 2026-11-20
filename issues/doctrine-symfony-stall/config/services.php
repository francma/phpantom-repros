<?php

declare(strict_types=1);

use Repro\MessageFormatter;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();
    $services->set(MessageFormatter::class);
    $services->alias('test.message_formatter', MessageFormatter::class)->public();
};
