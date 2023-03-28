<?php

namespace App\Http\Controllers\Admin\Contacts;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FileRequest;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Repair;
use Illuminate\Http\Request;

use App\Models\About;

use App\Http\Requests\creatRequest;


class CreatController extends Controller
{
    public function __invoke()
    {
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('admin.contacts.create', compact('ourServises', 'repairs'));
    }
}

