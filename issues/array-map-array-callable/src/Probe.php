<?php

namespace Repro;

final class Probe
{
    public static function make(int $id): Item
    {
        return new Item($id);
    }

    /**
     * @param non-empty-list<int> $ids
     * @return list<string>
     */
    public function example(array $ids): array
    {
        $arrayCallback = array_map([self::class, 'make'], $ids);
        $firstClassCallback = array_map(self::make(...), $ids);
        $arrowCallback = array_map(static fn(int $id): Item => new Item($id), $ids);

        return [
            $arrayCallback[0]->name(), // No definition or hover for name().
            $firstClassCallback[0]->name(), // Resolves Item::name().
            $arrowCallback[0]->name(), // Resolves Item::name().
        ];
    }
}
