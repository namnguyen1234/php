<?php
require_once 'models/User.php';

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


// class LoginController
// {
//     public $content;
//     public $error;

//     public function login() {
//         if (isset($_SESSION['user'])) {
//             return 'Bạn đã đăng nhập';
//         }
//         if (isset($_POST['submit'])) {
//             $username = $_POST['username'];
//             $password = md5($_POST['password']);
//             if (empty($username) || empty($password)) {
//                 $this->error = 'Username hoặc password không được để trống';
//             }
//             $user_model = new User();
//             if (empty($this->error)) {
//                 $user = $user_model->getUserByUsernameAndPassword($username, $password);
//                 if (empty($user)) {
//                     $this->error = 'Sai username hoặc password';
//                 } else {
//                     $_SESSION['success'] = 'Đăng nhập thành công';
//                     $_SESSION['user'] = $user;
//                 }
//             }
//                         return json_encode($user_model);
//         }
//     }

   
//     public function register() {

//         if (isset($_POST['submit'])) {
//             $user_model = new User();
//             $username = $_POST['username'];
//             $password = $_POST['password'];
//             $password_confirm = $_POST['password_confirm'];
//             $user = $user_model->getUserByUsername($username);
//             if (empty($username) || empty($password) || empty($password_confirm)) {
//                 $this->error = 'Không được để trống các trường';
//             } else if ($password != $password_confirm) {
//                 $this->error = 'Password nhập lại chưa đúng';
//             } else if (!empty($user)) {
//                 $this->error = 'Username này đã tồn tại';
//             }
//             if (empty($this->error)) {

//                 $user_model->username = $username;
//                 $user_model->password = md5($password);
//                 $user_model->status = 1;
//                 $is_insert = $user_model->insertRegister();
//                 if ($is_insert) {
//                     $_SESSION['success'] = 'Đăng ký thành công';
//                 } else {
//                     $_SESSION['error'] = 'Đăng ký thất bại';
//                 }
//             }
//         }
//                   return json_encode($user_model);
//     }
// }
