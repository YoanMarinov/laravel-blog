<?php
namespace App\Http\Controllers;


class UserController extends Controller{

    public function logout(){
        \Auth::logout();
        return \Redirect::to('/');
    }

}