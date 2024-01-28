<?php

namespace Tiennguyen\Mvcoop\Controllers\Admin;

use Tiennguyen\Mvcoop\Commons\Controller;
use Tiennguyen\Mvcoop\Models\User;

class UserController extends Controller
{
    private User $user;

    private string $folder = 'users.';

    const PATH_UPLOAD = '/uploads/users/';

    public function __construct()
    {
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
        if (!empty($_POST)) {

            $username = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $avatar = $_FILES['avatar'] ?? null;
            $avatarPath = null;
            if (!empty($avatar)) {

                if (!empty($avatar)) {
                    $avatarPath =  self::PATH_UPLOAD . time() . $avatar['name'];
                    if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                        $avatarPath = null;
                    }
                }
            }
            $this->user->insert($username, $email, $password, $avatarPath);
            header('Location: /admin/users');
            exit();
        }
        return $this->rederViewAdmin($this->folder . __FUNCTION__);
    }
    // Xem chi tiết theo ID
    public function show($id)
    {
        $user = $this->user->getByID($id);

        if (empty($user)) {
            e404();
        }

        return $this->rederViewAdmin($this->folder . __FUNCTION__, ['user' => $user]);
    }
    // Cập nhật theo ID
    public function update($id)
    {
        $user = $this->user->getByID($id);
        if (!empty($_POST)) {

            if (empty($user)) {
                e404();
            }
            $username = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $avatar = $_FILES['avatar'] ?? null;

            $avatarPath = $user['avatar'];
            if (!empty($avatar)) {

                if (!empty($avatar)) {
                    $avatarPath =  self::PATH_UPLOAD . $avatar['name'];
                    if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                        $avatarPath = $user['avatar'];
                    }
                }
            }
            $this->user->update($id, $username, $email, $password, $avatarPath);
            header('Location: /admin/users');
            exit();
        }
        return $this->rederViewAdmin($this->folder . __FUNCTION__, ['user' => $user]);
    }
    // Xóa theo ID
    public function delete($id)
    {
        $user = $this->user->getByID($id);

        if (empty($user)) {
            e404();
        }

        $this->user->delete($id);
        if (!empty($user['avatar']) && file_exists(PATH_ROOT . $user['avatar'])) {
            unlink(PATH_ROOT .  $user['avatar']);
        }
        header('Location: /admin/users');
        exit();
    }
}
