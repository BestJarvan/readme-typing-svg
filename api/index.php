<?php declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

// load environment variables if .env exists
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$controller = new RendererController($_REQUEST);
$controller->setHeaders();
echo $controller->render();

