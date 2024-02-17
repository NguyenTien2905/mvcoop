<?php

namespace Tiennguyen\Mvcoop\Controllers\Client;

use Tiennguyen\Mvcoop\Commons\Controller;
use Tiennguyen\Mvcoop\Models\Post;


class PostController extends Controller
{
    private Post $post;

    public function __construct()
    {
        $this->post = new Post;
    }
    public function show($id)
    {
        $post = $this->post->getByID($id);
 
        return $this->rederViewClient(
           'post-show',
           [
            'post' => $post
           ]
        );
    }

    public function showByCategory($category_id)
    {
        $posts = $this->post->getByCategory($category_id);
        return $this->rederViewClient(
           'search-result',
           [
            'posts' => $posts
           ]
        );
    }
}