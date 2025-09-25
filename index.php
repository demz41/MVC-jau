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
elseif ($action === 'edit') {
    if (isset($_GET['id'])) {
        $controller->edit($_GET['id']);
    } else {
        echo "User ID missing.";
    }
} 
elseif ($action === 'update') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $controller->update($_POST['id'], $_POST);
    }
} 
elseif ($action === 'delete') {
    if (isset($_GET['id'])) {
        $controller->delete($_GET['id']);
    }
} 
else {
    echo "Page not found.";
}
