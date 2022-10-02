<?php
require_once __DIR__ . '/vendor/autoload.php';
use app\core\Application;
$base_url="http://localhost:8080/";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$config=[
    'db' =>[
        'dns'=>$_ENV['DB_DNS'],
        'user'=>$_ENV['DB_USER'],
        'password'=>$_ENV['DB_PASSWORD'],
    ]
];
$client_id=$_ENV['CLIENT_ID'];
$client_secret=$_ENV['CLIENT_SECRET'];

$app = new Application(__DIR__,$config,$base_url,$client_id,$client_secret);

$app->database->applyMigrations();
