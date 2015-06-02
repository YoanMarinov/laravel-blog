<?php namespace App\Http\Controllers;

use App\Contracts\UserRepositoryInterface;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RegistrationController extends Controller {

    public function index(){
        return view('register');
    }

    public function register(Requests\CreateAccountRequest $request, UserRepositoryInterface $repo)
    {
        $repo->create($request);
        return \Redirect::to('login')->with('success', 'Successfully created an account!');
    }


}
