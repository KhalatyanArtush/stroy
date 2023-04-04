<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\File;
use App\Models\Home;

use App\Http\Requests\creatRequest;
use App\Models\Ourservice;
use App\Models\Video;


class OurServiceController extends Controller
{

    public function __invoke()
    {
        $home = Home::first();
        $about = About::first();
        $services = Ourservice::all();

        return view('services',compact('services', 'about', 'home'));
    }


    public function single(Ourservice $service){

        $home = Home::first();
        $files = File::all();
        $videos = Video::all();
        $services = Ourservice::all();

        return view('singleService',compact( 'service', 'services','files', 'videos', 'home'));

    }

}
