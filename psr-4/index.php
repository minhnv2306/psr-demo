<?php
require __DIR__ . '/vendor/autoload.php';

use GHTK\Controllers\HomeController;

$homeCtrl = new HomeController;

print_r($homeCtrl->actionIndex());
