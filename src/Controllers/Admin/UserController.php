<?php

namespace Tiennguyen\Mvcoop\Controllers\Admin;

use Tiennguyen\Mvcoop\Commons\Controller;
use Tiennguyen\Mvcoop\Models\User;

class UserController extends Controller
{
    private User $user;
    
    private string $folder = 'users.';

    public function __construct() {
        $this->user = new User;
    }
    // Danh Sách
    public function index()
    {
        $data['users'] = $this->user->getAll();
        return $this->rederViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }
    // Thêm mới
    public function create()
    {
        if (!empty($_POST)){
            $this -> user -> insert($_POST['name'],$_POST['email'],$_POST['password']);
            header('Location: /admin/users');
            exit();
        }
        return $this->rederViewAdmin($this->folder . __FUNCTION__);
    }
    // Xem chi tiết theo ID
    public function show($id)
    {
        $data['user'] = $this->user->getByID($id);
        if (empty($data['user'])) {
            die(404);
        }
        return $this->rederViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }
    // Cập nhật theo ID
    public function update($id)
    {
        $data['user'] = $this->user->getByID($id);

        if (empty($data['user'])) {
            die(404);
        }
        return $this->rederViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }
    // Xóa theo ID
    public function delete($id)
    {
        $this->user->delete($id);
    }
}
