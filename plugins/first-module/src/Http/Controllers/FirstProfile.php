<?php

namespace WebHoanHao\Module1\FirstModule\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstProfile extends Controller
{
    public function index()
    {
        return view('first-module::index');
    }
}
