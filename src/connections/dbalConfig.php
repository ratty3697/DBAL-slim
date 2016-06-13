<?php

$config = new \Doctrine\DBAL\Configuration();

$connectionParams = array(
    'dbname' => 'dbaltest',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);