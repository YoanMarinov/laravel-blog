<?php

get('/', 'HomeController@index');
get('login', 'PanelController@loginPage');
post('login', 'PanelController@login');
get('register', 'RegistrationController@index');
post('register', 'RegistrationController@register');
get('post/{id}', 'PostController@show');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    get('post/{id}/delete', 'PostController@destroy');
    get('dashboard', 'PanelController@dashboard');
    resource('post', 'PostController');
    get('logout', 'UserController@logout');
});