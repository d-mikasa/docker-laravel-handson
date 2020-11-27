<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login()
    {
        if (Input::get('foo')) {
            $this->foo();
        } elseif (Input::get('bar')) {
            $this->bar();
        }
    }

    public function link()
    {
        return view('welcome');
    }
}
