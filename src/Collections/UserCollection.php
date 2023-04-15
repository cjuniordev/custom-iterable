<?php

namespace Carlos\Collections;

use Carlos\Iterators\CustomIterator;
use Carlos\Models\User;

class UserCollection extends CustomIterator
{
    public function add(User $user): void
    {
        $this->items[] = $user;
    }

    public function find(int $id): ?User
    {
        return $this->items[$id] ?? null;
    }

    public function only(array $keys): self
    {
        $newCollection = new self();

        foreach ($keys as $key) {
            $user = $this->find($key);

            if (isset($user)) {
                $newCollection->add($user);
            }
        }

        return $newCollection;
    }
}