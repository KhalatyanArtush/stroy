<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FileRequest;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\About;

use App\Http\Requests\creatRequest;


class CreatController extends Controller
{
    public function __invoke()
    {
//        return view('admin.about.create');
    }
}

