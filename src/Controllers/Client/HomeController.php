<?php

namespace Tiennguyen\Mvcoop\Controllers\Client;

use Tiennguyen\Mvcoop\Commons\Controller;
use Tiennguyen\Mvcoop\Models\Post;


class HomeController extends Controller
{
    private Post $post;

    public function __construct()
    {
        $this->post = new Post;
    }
    public function index()
    {
        $postFirstLatest = $this->post->getFirstLatest();
        $postTop6 = $this->post->getTop6();
        $postTop6Chuck = array_chunk($postTop6, 3);


        return $this->rederViewClient(
           'home',
           [
            'postFirstLatest' => $postFirstLatest,
            'postTop6Chuck' => $postTop6Chuck
           ]
        );
    }
}
