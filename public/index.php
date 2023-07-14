<?php

use App\Core\Application;

const ROOT = __DIR__ . '/..';

require_once ROOT . "/vendor/autoload.php";

$app = new Application();

$app->run();