<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Comment;
use App\Models\CommentUser;
use App\Models\Home;
use App\Models\Ourservice;


class IndexController extends Controller
{

    public function __invoke()
    {

        if ($verify = session('verify')){
            $commentUser = CommentUser::where('email', $verify)->first();
        }else{
            $commentUser = null;
        }
        $home = Home::first();
        $services = Ourservice::all();
        $comments = Comment::orderBy('created_at', 'desc')->paginate(10);
//dd($comments->user->name);
        return view('index', compact('home', 'services', 'comments', 'verify', 'commentUser'));

    }
}
