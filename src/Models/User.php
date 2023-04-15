<?php

namespace Carlos\Models;

class User
{
    private static int $count = 1;
    public int $id;

    public function __construct(
        public string $name
    )
    {
        $this->id = self::$count;
        self::$count++;
    }

    public function __toString(): string
    {
        return "User {$this->id}: {$this->name}";
    }
}