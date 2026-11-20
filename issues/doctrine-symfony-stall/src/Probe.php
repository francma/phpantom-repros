<?php

namespace Repro;

use Symfony\Component\DependencyInjection\ContainerInterface;

function probe(ContainerInterface $container): mixed
{
    return $container->get('app.example');
}
