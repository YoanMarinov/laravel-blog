<?php

get('/', 'HomeController@index');
get('login', 'PanelController@loginPage');
post('login', 'PanelController@login');
get('register', 'RegistrationController@index');
post('register', 'RegistrationController@register');
get('post/{id}', 'PostController@show');
Route::group(['prefix' => 'panel', 'middleware' => 'auth'], function () {
    get('admin/dashboard', 'PanelController@dashboard');
    resource('post', 'PostController', ['except' => 'index']);
});