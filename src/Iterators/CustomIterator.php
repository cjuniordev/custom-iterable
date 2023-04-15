<?php

namespace Carlos\Iterators;

use Iterator;
use ReturnTypeWillChange;

class CustomIterator implements Iterator
{
    protected int $position = 0;
    protected array $items = [];

    #[ReturnTypeWillChange] public function current()
    {
        return $this->items[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public static function create(array $items = []): self
    {
        if (! array_is_list($items)) {
            throw new \InvalidArgumentException('The array must be a list');
        }

        $instance = new self();
        $instance->items = $items;

        return $instance;
    }
}