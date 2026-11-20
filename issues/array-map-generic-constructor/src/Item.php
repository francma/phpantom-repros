<?php

namespace Repro;

final class Item
{
    public function __construct(
        public int $id,
    ) {}

    public function name(): string
    {
        return (string) $this->id;
    }
}
