<?php
require_once 'model/user.php';
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

$method = $_SERVER['REQUEST_METHOD'];

switch($method) {
    case 'GET' :
        $user_model = new User();
        $user = $user_model->getById($id);
        if($user) {
            $reponse = [
                 'message' => 'Lấy user thành công',
                 'user' => $user
            ];
            return $reponse;
            http_response_code(200);
        } 
        
        else {
            $response = [
                'message' => 'Lấy user thất bại'
              ];
              return json_encode($response);
              http_response_code(500);
            }    
    break;

    case 'POST' :
        $user_model = new User();
        $user = $user_model->insertRegister();
        if($user) {
            $reponse = [
                 'message' => 'Đăng kí thành công',
                 'user' => $user
            ];
            return $reponse;
            http_response_code(200);
        } 
        
        else {
            $response = [
                'message' => 'Đăng kí  thất bại'
              ];
              return json_encode($response);
              http_response_code(500);
            }
           
    break;

    case 'PUT' : 
        $user_model = new User();
        $user = $user_model->update($id);
        if($user) {
            $reponse = [
                 'message' => 'Cập nhật user thành công',
                 'user' => $user
            ];
            return $reponse;
            http_response_code(200);
        } else {
            $response = [
                'message' => 'Cập nhật user thất bại'
              ];
              return json_encode($response);
              http_response_code(500);
            }
            
    break;

    case 'DELETE' : 
        $user_model = new User();
        $user = $user_model->delete($id);
        if($user) {
            $reponse = [
                 'message' => 'Xóa user thành công',
                 'user' => $user
            ];
            return $reponse;
            http_response_code(200);
        } else {
            $response = [
                'message' => 'Xóa user thất bại'
              ];
              return json_encode($response);
              http_response_code(500);
            }
           
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
