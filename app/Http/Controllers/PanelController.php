<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{

    public function loginPage()
    {
        return view('panel.login');
    }

    public function login()
    {
        if (\Auth::attempt(['email' => \Request::input('email'), 'password' => \Request::input('password')])) {
            return \Auth::intended('admin/dashboard');
        } else {
            return \Redirect::back()->with('error', 'Wrong username/password');
        }
    }

}
