<?php

namespace Tiennguyen\Mvcoop\Controllers\Admin;

use Tiennguyen\Mvcoop\Commons\Controller;
use Tiennguyen\Mvcoop\Models\Category;

class CategoryController extends Controller
{
    private Category $category;
    
    private string $folder = 'categories.';

    public function __construct() {
        $this->category = new Category;
    }
    // Danh Sách
    public function index()
    {
        $data['categories'] = $this->category->getAll();
        return $this->rederViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }
    // Thêm mới
    public function create()
    {
        if (!empty($_POST)){
            $this -> category -> insert($_POST['name']);
            header('Location: /admin/categories');
            exit();
        }
        return $this->rederViewAdmin($this->folder . __FUNCTION__);
    }
    // Xem chi tiết theo ID
    public function show($id)
    {
        $category = $this->category->getByID($id);

        if (empty($category)) {
            e404();
        }

        return $this->rederViewAdmin($this->folder . __FUNCTION__, ['category' => $category]);
    }
    // Cập nhật theo ID
    public function update($id)
    {
        $category = $this->category->getByID($id);
        if (!empty($_POST)) {

            if (empty($category)) {
                e404();
            }

            $name = $_POST['name'];
          

            $this->category->update($id, $name);
            header('Location: /admin/categories');
            exit();
        }
        return $this->rederViewAdmin($this->folder . __FUNCTION__, ['category' => $category]);
    }
    // Xóa theo ID
    public function delete($id)
    {
        $category = $this->category->getByID($id);

        if (empty($user)) {
            e404();
        }

        $this->category->delete($id);
        header('Location: /admin/categories');
        exit();
    }
}
