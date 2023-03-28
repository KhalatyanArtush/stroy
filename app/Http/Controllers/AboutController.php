<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\OurServise;
use App\Models\Repair;
use Illuminate\Http\Request;

use App\Http\Requests\creatRequest;


class AboutController extends Controller
{

    public function __invoke()
    {
        $home = Home::first();
        $about = About::first();

        return view('about',compact('about','home'));
    }
}
