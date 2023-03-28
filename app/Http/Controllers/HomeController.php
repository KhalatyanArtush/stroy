<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;

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
    public function index()
    {
        $home = Home::first();
        $about = About::first();

        return view('about',compact('about','home'));
        return redirect('/admin/posts');

    }
}
