<?php
namespace App\Repositories;


use App\Contracts\PostRepositoryInterface;
use App\Post;

class PostRepository implements PostRepositoryInterface
{


    public function save($request, $post)
    {
        $hasBeforeImage = $post->image != "" ? 1 : 0;
        $post->title = e($request->input('title'));
        $post->content = e($request->input('post'));
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $post->image = $request->file('image')->getClientOriginalName();
        }
        $post->save();
        if ($request->hasFile('image')) {
            if ($hasBeforeImage) {
                \File::deleteDirectory("posts/" . $post->id);
            }
            $image->move('posts/' . $post->id . '/', $request->file('image')->getClientOriginalName());
        }
    }

    public function delete($post)
    {

        if ($post->image != "") {
            \File::deleteDirectory("posts/" . $post->id);
        }
        $post->comments()->delete();
        $post->delete();
    }
}