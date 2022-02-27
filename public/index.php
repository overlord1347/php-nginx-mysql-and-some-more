<?php

declare(strict_types=1);

use Symfony\Component\Dotenv\Dotenv;

require_once '../vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load('../.env');
$dotenv->usePutenv(true);


// Testing connection to database
//$mysqli = new mysqli($_ENV['DATABASE_HOST'], $_ENV['DATABASE_PASS'], $_ENV['DATABASE_USER']);
//
//if ($mysqli->connect_error) {
//    die(
//        'Ошибка подключения (' . $mysqli->connect_errno . ') '
//        . $mysqli->connect_error
//    );
//}
//echo '<p>Success connection ' . $mysqli->host_info . "</p>";
//echo 'Версия MYSQL сервера: ' . $mysqli->server_info . "\n";
//$mysqli->close();
