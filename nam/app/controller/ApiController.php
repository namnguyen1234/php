<?php
namespace App\Controller;

use app\model\User;

header('Content-Type: application/json');

class ApiController
{
    public function getById() {
        $data = json_decode(file_get_contents('php://input'), true);
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'GET') {
            $id = $_GET['id'];
            $user_model = new User();
            $user = $user_model->getById($id);
            if($user) {
                $response = [
                    'message' =>  'Lấy user thành công',
                    'user' => $user
                ];
                http_response_code(200);
            } else {
                $response = [
                    'message' => 'Lấy user thất bại'
                ];
                http_response_code(500);
            }
            return json_encode($response);
        }
    }

   
    public function destroys() {
        $data = json_decode(file_get_contents('php://input'), true);
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'DELETE') {
            $id = $_GET['id'];
            $user_model = new User();
            $user = $user_model->delete($id);
            if($user) {
                $response = [
                    'message' => 'Xóa user thành công',
                    'user' => $user
                ];
                http_response_code(200);
            } else {
                $response = [
                    'message' => 'Xóa user thất bại'
                ];
                http_response_code(500);
            }
            return json_encode($response);
        }
    }

    public function insert() {
        $data = json_decode(file_get_contents('php://input'), true);
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST') {
            $user_model = new User();
            $user = $user_model->insert();
            if($user) {
                $response = [
                    'message' => 'Tạo mới user thành công',
                    'user' => $user
                ];
                http_response_code(200);
            } else {
                $response = [
                    'message' => 'Tạo mới user thất bại'
                ];
                http_response_code(500);
            }
            return json_encode($response);
        }
    }

    public function update() {
        $data = json_decode(file_get_contents('php://input'), true);
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'PUT') {
            $id = $_POST['id'];
            $user_model = new User();
            $user = $user_model->update($id);
            if($user) {
                $response = [
                    'message' => 'Cập nhật user thành công',
                    'user' => $user
                ];
                http_response_code(200);
            } else {
                $response = [
                    'message' => 'Cập nhật user thất bại'
                ];
                http_response_code(500);
            }
            return json_encode($response);
        }
    }

}
