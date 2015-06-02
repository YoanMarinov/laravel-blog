<?php
namespace App\Repositories;


use App\Contracts\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface{

    public function create($request)
    {
        $user = new User();
        $user->email = e($request->input('email'));
        $user->password = bcrypt($request->input('password'));
        $user->save();
    }
}