<?php

declare(strict_types=1);

require dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'autoload.php';

$rootPath = dirname(__DIR__) . \DIRECTORY_SEPARATOR;
if (file_exists($rootPath . '.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable($rootPath);
    $dotenv->load();
}
