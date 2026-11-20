<?php

declare(strict_types=1);

namespace Repro\Tests;

use Repro\Kernel;
use Repro\MessageFormatter;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class MessageFormatterTest extends KernelTestCase
{
    protected static function getKernelClass(): string
    {
        return Kernel::class;
    }

    public function testWelcomeMessage(): void
    {
        $formatter = self::getContainer()->get('test.message_formatter');

        self::assertInstanceOf(MessageFormatter::class, $formatter);
        self::assertSame('Hello, reader!', $formatter->welcome('reader'));
    }
}
