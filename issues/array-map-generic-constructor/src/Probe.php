<?php

namespace Repro;

final class Probe
{
    /**
     * @param non-empty-list<int> $ids
     * @return list<string>
     */
    public function example(array $ids): array
    {
        $inline = new Box(array_map(static fn(int $id): Item => new Item($id), $ids));
        $mapped = array_map(static fn(int $id): Item => new Item($id), $ids);
        $viaVariable = new Box($mapped);
        $literal = new Box([new Item(1)]);

        return [
            $inline->get()[0]->name(), // No definition or hover; Box<Item>.
            $viaVariable->get()[0]->name(), // Resolves Item::name(); Box<list<Item>>.
            $literal->get()[0]->name(), // Resolves Item::name().
        ];
    }

    /**
     * @param list<int> $ids
     * @return Box<list<Item>>
     */
    public function response(array $ids): Box
    {
        // Reports: expected Box<list<Item>>, got Box<Item>.
        return new Box(array_map(static fn(int $id): Item => new Item($id), $ids));
    }
}
