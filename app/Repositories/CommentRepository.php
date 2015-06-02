<?php
namespace App\Repositories;


use App\Comment;
use App\Contracts\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface{


    public function create($request, $post_id)
    {
        $comment = new Comment();
        $comment->comment = e($request->input('comment'));
        $comment->author = e($request->input('name'));
        $comment->post_id = $post_id;
        $comment->save();
    }
}