<?php

declare(strict_types=1);

namespace Repro;

final class MessageFormatter
{
    public function welcome(string $name): string
    {
        return sprintf('Hello, %s!', $name);
    }
}
