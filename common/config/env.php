<?php

use Dotenv\Dotenv;

defined('YII_APP_BASE_PATH') or define('YII_APP_BASE_PATH', dirname(__DIR__, 2));

$dotenv = Dotenv::createImmutable(YII_APP_BASE_PATH);
$dotenv->load();