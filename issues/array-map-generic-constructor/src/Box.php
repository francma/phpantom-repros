<?php

namespace Repro;

/** @template T */
final class Box
{
    /** @param T $value */
    public function __construct(
        private mixed $value,
    ) {}

    /** @return T */
    public function get(): mixed
    {
        return $this->value;
    }
}
