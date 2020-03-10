<?php
require __DIR__ . '/vendor/autoload.php';

use AHT\Controllers\HomeController;
use AHT\Repositories\HomeRepository;
use AHT\Customie\HomeCustomie;

$homeCtrl = new HomeController;
$homeRps = new HomeRepository;
$homeCus = new HomeCustomie;

print_r($homeCtrl->actionIndex());
$homeRps->hello(); // Hello - vì đã được load thành công
$homeCus->bye();
?>