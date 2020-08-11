<?php
require_once './vendor/autoload.php';
require_once './constants.php';
require_once './functions.php';
require_once './routes.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS', 'DB_PDO_DSN']);
$app = Mubangizi\Application::instance();
$app->run();
