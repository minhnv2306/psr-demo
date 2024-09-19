<?php
spl_autoload_register(function ($classname)  {
    $filename = __DIR__ . '/classes/' . $classname . '.php';
    include $filename;
});

$foo = new Foo;
$bar = new Bar;
