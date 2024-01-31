<?php

namespace Tiennguyen\Mvcoop\Controllers\Admin;

use Tiennguyen\Mvcoop\Commons\Controller;
use Tiennguyen\Mvcoop\Models\Category;
use Tiennguyen\Mvcoop\Models\Post;

class PostController extends Controller
{

    private Post $post;
    private Category $category;

    private string $folder = 'posts.';

    const PATH_UPLOAD = '/uploads/posts/';

    public function __construct()
    {
        $this->post = new post;
        $this->category = new category;
    }
    // Danh Sách
    public function index()
    {
        $data['posts'] = $this->post->getAll();
        return $this->rederViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }
    // Thêm mới
    public function create()
    {
        $categories = $this->category->getAll();
        if (!empty($_POST)) {
            $title = $_POST['title'];
            $excerpt = $_POST['excerpt'];
            $content = $_POST['content'];

            if (empty($category_id)){
                $error = 'Chưa chọn danh mục';
            }
            $category_id = $_POST['category_id'];
            $image = $_FILES['image'] ?? null;
            $imagePath = null;
            if (!empty($image)) {

                if (!empty($image)) {
                    $imagePath =  self::PATH_UPLOAD . time() . $image['name'];
                    if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                        $imagePath = null;
                    }
                }
            }
            $this->post->insert($title, $excerpt, $content, $imagePath, $category_id);
            header('Location: /admin/posts');
            exit();
        }
        return $this->rederViewAdmin($this->folder . __FUNCTION__, ['categories' => $categories]);
    }
    // Xem chi tiết theo ID
    public function show($id)
    {
        $post = $this->post->getByID($id);

        if (empty($post)) {
            e404();
        }

        return $this->rederViewAdmin($this->folder . __FUNCTION__, ['post' => $post]);
    }
    // Cập nhật theo ID
    public function update($id)
    {
        $data['post'] = $this->post->getByID($id);
        $data['categories'] = $this->category->getAll();
        if (!empty($_POST)) {


            if (empty($data['post'])) {
                e404();
            }

            $title = $_POST['title'];
            $excerpt = $_POST['excerpt'];
            $content = $_POST['content'];
            $category_id = $_POST['category_id'];
            $image = $_FILES['image'] ?? null;

            $imagePath = $data['post']['image'];
            if (!empty($image)) {

                if (!empty($image)) {
                    $imagePath =  self::PATH_UPLOAD . $image['name'];
                    if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                        $imagePath = $data['post']['image'];
                    }
                }
            }
            $_SESSION['success'] = 'Thao tác thành công';
            $this->post->update($id, $title, $excerpt, $content, $imagePath, $category_id);



            header("Location: /admin/posts/$id/update");
            exit();
        }
        return $this->rederViewAdmin($this->folder . __FUNCTION__, $data);
    }
    // Xóa theo ID
    public function delete($id)
    {
        $post = $this->post->getByID($id);

        if (empty($post)) {
            e404();
        }

        $this->post->delete($id);
        if (!empty($post['image']) && file_exists(PATH_ROOT . $post['image'])) {
            unlink(PATH_ROOT .  $post['image']);
        }
        header('Location: /admin/posts');
        exit();
    }
};
