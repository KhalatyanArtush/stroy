<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Comment;
use App\Models\CommentUser;
use App\Models\Home;
use App\Models\Ourservice;
use Illuminate\Http\Request;


class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        if ($request->ajax()) {
//            $pages = 3+$request->page;
//dump($pages);
            $comments = Comment::orderBy('created_at', 'desc')->paginate(3);
            $data = '';

            foreach ($comments as $comment) {

                $data .= '<div class="list_section_block">' .
                '<div class="list_info_block_left">' .

                '<p>'. $comment->comment_users_name . '</p>'.
                '</div>'.
                '<div class="list_read_more_btn">'.
                '<p>'. $comment->text .'</p>'.
                '</div>'.
                '</div>';

            }
            return $data;
        }
        else {
            $comments = Comment::orderBy('created_at', 'desc')->paginate(3);

        }
        if ($verify = session('verify')){
            $commentUser = CommentUser::where('email', $verify)->first();
        }else{
            $commentUser = null;
        }
        $home = Home::first();
        $services = Ourservice::all();
//dd($comments->user->name);
        return view('index', compact('home', 'services', 'comments', 'verify', 'commentUser'));

    }
}
