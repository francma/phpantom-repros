<?php

namespace Repro\Test;

use Repro\Contract;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class LookupTest extends KernelTestCase
{
    public function testLookup(): void
    {
        self::getContainer()->get(Contract::class)->common();
        self::getContainer()->get(Contract::class)->seed();
        self::getContainer()->get('repro.in_memory')->seed();
    }
}
