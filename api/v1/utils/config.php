<?php
 
use Illuminate\Database\Capsule\Manager as Capsule;
 
$app = new \Slim\App([
    'settings' => [
        /*
        displayErrorDetails ini untuk menampilkan ketika ada error pada API kita
        */
        'displayErrorDetails' => true
    ]
]);
 
$container = $app->getContainer();
 
$capsule = new Capsule;
$capsule->addConnection([
    /*
    settingan untuk server dan database yang kita pakai
    */
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'universitas_android',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$capsule->bootEloquent();
$capsule->setAsGlobal();