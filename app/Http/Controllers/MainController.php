<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        dump('index');
    }

    public function show()
    {
        dump("product description");
    }

    public function newOrder()
    {
        dump('order');
    }
}
