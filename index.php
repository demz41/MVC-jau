<?php
require_once 'controllers/UserController.php';

$controller = new UserController();


$action = $_GET['action'] ?? 'index';


if ($action === 'index') {
    $controller->index();
} 
elseif ($action === 'create' || $action === 'new') {
    $controller->create();
} 
elseif ($action === 'store') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->store($_POST);
    }
} 

else {
    echo "Page not found.";
}
