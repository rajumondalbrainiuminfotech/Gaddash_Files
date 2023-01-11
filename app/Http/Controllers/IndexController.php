<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    //

    public function product()
    {
        return Inertia::render('Product');
    }

    public function home()
    {
        return  view('home');
    }
    public function index()
    {
        return Inertia::render('Index');
    }
}
