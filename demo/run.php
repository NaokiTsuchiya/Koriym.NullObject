<?php

declare(strict_types=1);

namespace Demo;

$loader = require dirname(__DIR__,) . '/vendor/autoload.php';

interface FooInterface
{
    public function do(): void;
}

$nullClass = FooInterface::class . 'Null'; // add Null postfix to the interface
$foo = new $nullClass;  // instantiate a NullObject
assert($foo instanceof FooInterface);
$foo->do(); // nothing's going to happen
