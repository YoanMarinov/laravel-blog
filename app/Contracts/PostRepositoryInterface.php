<?php
namespace App\Contracts;


interface PostRepositoryInterface
{

    public function save($request, $post);

    public function delete($post);

}