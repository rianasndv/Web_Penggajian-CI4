<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        $config = config('Auth');

        return view('auth/login', [
            'config' => $config,
        ]);
    }
    public function register(): string
    {
        return view('auth/register');
    }

    public function user(): string
    {
        return view('admin/index');
    }
}
