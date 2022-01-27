<?php
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
require_once __DIR__ . '/vendor/autoload.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = ucfirst($controller);
$controller .= "Controller";

$path_controller = "app/controller/$controller.php";

if (file_exists($path_controller) == false) {
    die('Trang bạn tìm không tồn tại');
}

require_once "$path_controller";

$instanceClass = "App\\Controller\\$controller";

$object = new $instanceClass();

if (method_exists($object , $action) == false) {
    die("Không tồn tại phương thức $action của class $controller");
}
$object->$action();
?>