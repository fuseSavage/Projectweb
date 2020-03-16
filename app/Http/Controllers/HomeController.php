<?php

namespace App\Http\Controllers;

use App\Manga;
use Illuminate\Http\Request;
use \App\Upload;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        $upload = Manga::all()->sortByDesc('id');
        return view('home', compact('upload'));
    }
}
