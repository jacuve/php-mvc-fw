<?php

require_once __DIR__ .  '/../vendor/autoload.php';

use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');
$app->router->get('/contact', 'contact');
$app->router->get('/contact', function(){

});

$app->run();

// https://www.youtube.com/watch?v=6ERdu4k62wI&feature=youtu.be
// minuto 57 controllers