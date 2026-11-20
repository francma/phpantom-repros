<?php

namespace Repro;

use Closure;

final class Invoke
{
    /** @param Closure(): Service $factory */
    public function __construct(
        private Closure $factory,
    ) {}

    /** @param Closure(): Service $local */
    public function check(Closure $local): void
    {
        ($this->factory)()->seed();
        $fromProperty = ($this->factory)();
        $fromProperty->seed();
        $local()->seed();
        $inferred = fn(): Service => new Service();
        $inferred()->seed();
    }
}
