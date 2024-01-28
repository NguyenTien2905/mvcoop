<?php

namespace Tiennguyen\Mvcoop\Models;

use Tiennguyen\Mvcoop\Commons\Model;

class User extends Model
{
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM users";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function getByID($id)
    {
        try {
            $sql = "SELECT * FROM users WHERE id = :id";

            $stmt =  $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function insert($username, $email, $password, $avatar)
    {
        try {
            $sql = "
                INSERT INTO users(username, email, password, avatar)
                VALUES (:username, :email, :password, :avatar) ";

            $stmt =  $this->conn->prepare($sql);

            $stmt->bindParam(':avatar', $avatar);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function update($id, $username, $email, $password, $avatar)
    {
        try {
            $sql = "
                UPDATE users
                SET username = :username,
                    email = :email, 
                    password = :password,
                    avatar = :avatar
                WHERE id = :id";

            $stmt =  $this->conn->prepare($sql);
            $stmt->bindParam(':avatar', $avatar);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM users WHERE id = :id";

            $stmt =  $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}
