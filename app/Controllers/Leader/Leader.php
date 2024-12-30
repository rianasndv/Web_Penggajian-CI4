<?php

namespace App\Controllers\Leader;
use App\Controllers\BaseController;

class Leader extends BaseController
{
    public function index(): string
    {
        return view('leader/index');
    }
}