<?php
require_once 'model/user.php';
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

$method = $_SERVER['REQUEST_METHOD'];

switch($method) {
    case 'GET' :
        $user_model = new User();
        $user = $user_model->getById($id);
        return json_encode(['user'=>$user_model]);
    break;

    case 'POST' :
        $user_model = new User();
        $user = $user_model->insertRegister();
        return json_encode(['user'=>$user_model]);
    break;

    case 'PUT' : 
        $user_model = new User();
        $user = $user_model->update($id);
        return json_encode(['user'=>$user_model]);
    break;

    case 'DELETE' : 
        $user_model = new User();
        $user = $user_model->delete($id);
        return json_encode(['user'=>$user_model]);
    break;
    
        
}
