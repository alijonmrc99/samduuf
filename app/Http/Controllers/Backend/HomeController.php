<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Facade\FlareClient\Api;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.layouts.main');
    }

    public function test()
    {
        return view('backend.test');
    }
}
