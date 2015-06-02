<?php
namespace App\Contracts;


interface CommentRepositoryInterface {

    public function create($request, $post_id);

}