<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FileRequest;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\About;

use App\Http\Requests\creatRequest;


class CreatController extends \App\Http\Controllers\Admin\BaseController

{
    public function post()
    {
//        return view('admin.about.create');
    }

//    public function home()
//    {
//        return view('admin.home.create');
//    }

    public function homeService()
    {
        return view('admin.homeService.create');
    }
}

