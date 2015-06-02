<?php namespace App\Http\Controllers;

use App\Contracts\PostRepositoryInterface;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::get();

        return view('panel.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('panel.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\CreatePostRequest $request, PostRepositoryInterface $repo)
    {
        $post = new Post();
        $repo->save($request, $post);

        return \Redirect::to('admin/post')->with('success', 'Successfully created post!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('panel.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(PostRepositoryInterface $repo, Requests\CreatePostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $repo->save($request, $post);

        return \Redirect::to('admin/post')->with('success', 'Successfully edited post!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id, PostRepositoryInterface $repo)
    {
        $post = Post::findOrFail($id);
        $repo->delete($post);

        return \Redirect::to('admin/post')->with('success', 'Successfully deleted post!');
    }

}
