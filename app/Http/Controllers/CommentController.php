<?php
namespace App\Http\Controllers;


use App\Contracts\CommentRepositoryInterface;
use App\Http\Requests\CreateCommentRequest;

class CommentController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function create(CommentRepositoryInterface $repo, CreateCommentRequest $request)
    {
        $repo->create($request,\Request::input('post_id'));
        return \Redirect::back()->with('success', 'Successfully commented the post');
    }
}