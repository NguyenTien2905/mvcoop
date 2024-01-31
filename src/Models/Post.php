<?php

namespace Tiennguyen\Mvcoop\Models;

use Tiennguyen\Mvcoop\Commons\Model;

class Post extends Model
{
    public function getAll()
    {
        try {
            $sql = "SELECT posts.id, title, excerpt, content, image, name, category_id
                    FROM posts
                    INNER JOIN categories 
                        ON posts.category_id = categories.id";

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
            $sql = "SELECT posts.id, title, excerpt, content, image, name, category_id
                    FROM posts
                    INNER JOIN categories 
                    ON posts.category_id = categories.id 
                    WHERE posts.id = :id";

            $stmt =  $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function insert($title, $content, $category_id, $excerpt = null, $image = null )
    {
        try {
            $sql = "
                INSERT INTO posts(title, excerpt, content, image, category_id)
                VALUES (:title, :excerpt, :content, :image, :category_id) ";

            $stmt =  $this->conn->prepare($sql);

            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':excerpt', $excerpt);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':category_id', $category_id);


            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function update($id, $title, $excerpt, $content, $image, $category_id)
    {
        try {
            $sql = "
                UPDATE posts
                SET title = :title,
                    excerpt = :excerpt, 
                    content = :content,
                    category_id = :category_id,
                    image = :image
                WHERE id = :id";

            $stmt =  $this->conn->prepare($sql);

            $stmt->bindParam(':category_id', $category_id);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':excerpt', $excerpt);
            $stmt->bindParam(':content', $content);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM posts WHERE id = :id";

            $stmt =  $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function getByEmailAndPsssword($email, $password)
    {
        try {
            $sql = "SELECT * FROM posts WHERE email = :email AND password = :password";

            $stmt =  $this->conn->prepare($sql);

            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}
