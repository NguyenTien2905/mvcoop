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
        $data['categories'] = $this->category->getByID($id);
        if (empty($data['category'])) {
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
        $data['category'] = $this->category->getByID($id);

        if (empty($data['category'])) {
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
        $this->category->delete($id);
    }
}
