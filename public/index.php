<?php
require_once __DIR__ . '/../vendor/autoload.php';
use app\controller\SiteController;
use app\core\Application;


$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
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
$base_url=$_ENV["BASE_URL"];

$app = new Application(dirname(__DIR__),$config,$base_url,$client_id,$client_secret);

$app->router->get('/','index');
$app->router->get('/users',[SiteController::class,'show']);
$app->router->post('/save_user',[SiteController::class,'handleRequest']);
$app->router->post('/charge',[SiteController::class,'ChargeUser']);
$app->router->get('/success',[SiteController::class,'success']);
$app->router->get('/cancel',[SiteController::class,'cancel']);
$app->router->get('/transactions',[SiteController::class,'transactions']);




$app->run();
