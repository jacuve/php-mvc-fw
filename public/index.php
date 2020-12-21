<?php


use app\core\Application;
use app\controllers\SiteController;
use app\controllers\AuthController;

require_once __DIR__ .  '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();

// https://www.youtube.com/watch?v=6ERdu4k62wI&feature=youtu.be
// 3:50:00 -> form labels

// 3:31:30 -> 3:48:50 redirect y session flash message
// 3:18:00 -> 3:31:30 password encrypt
// 3:17:30 fin registratsion
// minuto 3:04:00 registration
// minuto 3:04:00 migrations . read insert.
// minuto 2:39:00 migrations
