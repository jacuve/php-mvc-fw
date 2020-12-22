<?php


use app\core\Application;
use app\controllers\SiteController;
use app\controllers\AuthController;
use app\models\User;

require_once __DIR__ .  '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'userClass' => User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'contact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/profile', [AuthController::class, 'profile']);

$app->run();

// https://www.youtube.com/watch?v=6ERdu4k62wI&feature=youtu.be
// 5:24:00 ->
// 4:58:00 -> 5:24:00 title y moved classes
// 4:35:30 -> 4:57:44 protected
// 4:30:00 -> 4:35:00 mensaje y logout
// 3:59:51 -> 4:29: login y protected rows
// 3:50:00 -> 3:59:50 form labels
// 3:31:30 -> 3:48:50 redirect y session flash message
// 3:18:00 -> 3:31:30 password encrypt
// 3:17:30 fin registratsion
// minuto 3:04:00 registration
// minuto 3:04:00 migrations . read insert.
// minuto 2:39:00 migrations
