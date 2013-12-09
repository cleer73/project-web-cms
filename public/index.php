<?php

$appRoot = realpath(dirname(__FILE__).'/../app');

include "{$appRoot}/autoload.php";

$app = new \Slim\Slim([
  'view' => new App\Util\View(),
  'templates.path' => "{$appRoot}/view"
]);

include "app/routes/admin.php";
include "app/routes/cms.php";

$app->run();
