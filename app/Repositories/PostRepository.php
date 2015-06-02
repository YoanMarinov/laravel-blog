<?php
namespace App\Repositories;


use App\Contracts\PostRepositoryInterface;
use App\Post;

class PostRepository implements PostRepositoryInterface{


    public function save($request, $post)
    {
        $post->title = e($request->input('title'));
        $post->content = e($request->input('post'));
        $post->save();
    }

    public function delete($post)
    {
       $post->delete();
    }
}