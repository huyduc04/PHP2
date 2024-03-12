<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
// $router->get('/', function(){
//     return "trang chủ ne";
// });
//định nghĩa đường dẫn trỏ đến Product Controller
$router->get('/', [\B\Kt\controller\PetController::class, 'getPet']);
$router->get('add', [\B\Kt\controller\PetController::class, 'add']);
$router->post('addPet', [\B\Kt\controller\PetController::class, 'addPets']);
$router->get('update', [\B\Kt\controller\PetController::class, 'updateView']);
$router->post('updatePet', [\B\Kt\controller\PetController::class, 'postUpdatePet']);
$router->get('delete', [\B\Kt\controller\PetController::class, 'postDeletePet']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>