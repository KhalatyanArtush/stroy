<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;

use App\Http\Requests\creatRequest;
use App\Models\Ourservice;


class ServiceController extends Controller
{

    public function __invoke()
    {
        $home = Home::first();
        $about = About::first();
        $services = Ourservice::all();

        return view('about',compact('about','home'));
    }
}
