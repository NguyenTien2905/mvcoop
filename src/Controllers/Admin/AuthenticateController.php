<?php

namespace Tiennguyen\Mvcoop\Controllers\Admin;

use Tiennguyen\Mvcoop\Commons\Controller;
use Tiennguyen\Mvcoop\Models\User;

class AuthenticateController extends Controller
{
    public function login()
    {
        if (!empty($_POST)) {
            $_SESSION['errors'] = [];

            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['errors']['email'] = 'Email không được để trống và đúng định dạng';
            }

            if (empty($$password)) {
                $_SESSION['errors']['password'] = 'Password không được để trống';
            }

            $user = (new User)->getByEmailAndPsssword($_POST['email'], $_POST['password']);

            if (empty($user)) {
                $_SESSION['errors']['not-found'] = 'Không tìm thấy người dùng';
            } else {
                $_SESSION['user'] = $user;

                header('Location: /admin');
                exit;
            }
        }
        return $this->rederViewAdmin(__FUNCTION__);
    }

    public function logout()
    {
        session_destroy();

        header('Location: /');
        exit();
    }
}
