<?php

namespace App\Controllers\User;
use App\Controllers\BaseController;

class User extends BaseController
{
    public function index(): string
    {
        return view('user/index');
    }
}