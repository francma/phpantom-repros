<?php

namespace Repro;

final class Probe
{
    /** @return list<string> */
    public function example(): array
    {
        $rows = [['item' => new Item(1)], ['item' => new Item(2)]];
        $column = array_column($rows, 'item');
        $mapped = array_map(static fn(array $row): Item => $row['item'], $rows);

        return [
            $column[0]->name(), // No definition or hover for name().
            $mapped[0]->name(), // Resolves Item::name().
            $rows[0]['item']->name(), // Resolves Item::name().
        ];
    }
}
