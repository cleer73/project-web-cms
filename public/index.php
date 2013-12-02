<?php

include realpath(dirname(__FILE__).'/../app').'/autoload.php';

$app = new \Slim\Slim();

include "app/routes/home.php";

// $app->get('/', function () {
//   print('hi');
// });

$app->run();
