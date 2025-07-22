<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin');
    }
    public function update()
    {
        return view('update');
    }





    public function register(UserRequest $request) {}
}
