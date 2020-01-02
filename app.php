<?php 
require '../vendor/autoload.php';
require '../Router.php';

session_start();

if(isset($_SESSION['message'])){
    $msg=$_SESSION['message'];
    if($msg!=" "){
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    $_SESSION['message'] = " ";
}

$router = new Router();

$router->get('/masterpieces', 'PictureController::index');
$router->post('/picture/add', 'PictureController::add');
$router->get('/picture/remove', 'PictureController::remove');

$router->post('/register', 'UserController::add');
$router->post('/login', 'UserController::login');
$router->post('/logout', 'UserController::logout');
$router->get('/me', 'UserController::profile');

$router->_404('ErrorController::_404');


$view = $router-> dispatch();
$view->render();