<?php

require __DIR__ . '/../vendor/autoload.php';

use Carlos\Collections\UserCollection;
use Carlos\Models\User;

$users = new UserCollection();
$users->add(new User('Carlos'));
$users->add(new User('John'));
$users->add(new User('Jane'));

echo "All users:" . PHP_EOL;
foreach ($users as $user) {
    echo $user->name . PHP_EOL;
}

$someUsers = $users->only([1, 2]);

echo "\nSome users:" . PHP_EOL;
foreach ($someUsers as $user) {
    echo $user->name . PHP_EOL;
}