<?php



require_once './vendor/autoload.php';

require_once './emv.php';
use Tiennguyen\Mvcoop\Models\Category;
$category = new Category();
$category -> insert('Thể Thao');
// $category -> getAll();
die;
require_once './routes.php';
