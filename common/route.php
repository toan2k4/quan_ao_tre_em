<?php

use App\Controllers\Admin\HomeAdminController;
use App\Controllers\Client\AuthClientController;
use App\Controllers\Client\HomeClientController;
use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('authClient', function () {
    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});

$router->filter('authAdmin', function () {
    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }else if($_SESSION['user']->name == "User"){
        header('location: ' . BASE_URL);
        die;
    }
});


// khu vực cần quan tâm -----------
// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', [HomeClientController::class, 'index']);
$router->get('login', [AuthClientController::class, 'authenShowFormLogin']);
$router->post('login', [AuthClientController::class, 'authenLogin']);

$router->group(['before' => 'authAdmin','prefix' => 'admin'], function($router){
    $router->get('/', [HomeAdminController::class, 'index']);
});

//định nghĩa đường dẫn trỏ đến Product Controller
$router->get('list-product', [App\Controllers\ProductController::class, 'index']);
// khu vực cần quan tâm -----------
//$router->get('test', [App\Controllers\ProductController::class, 'index']);



# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>