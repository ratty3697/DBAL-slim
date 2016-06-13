<?php

require '../src/vendor/autoload.php';

require __DIR__ . '/../src/connections/dbalConfig.php';

$app = new \Slim\App;

require __DIR__ . '/../src/routes.php';


$app->run();