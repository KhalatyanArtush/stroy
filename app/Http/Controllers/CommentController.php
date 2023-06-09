<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Http\Requests\CommentUserStoreRequest;
use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Http\Request;

use App\Http\Requests\creatRequest;


class CommentController extends Controller
{

    public $service;

    public function __construct(CommentService $service)
    {
        $this->service = $service;
    }

    public function store(CommentUserStoreRequest $request)
    {
        session()->put('verify', $request['email']);
//        session()->flush();
//        session()->forget('verify');
        $data = $request->validated();
        $this->service->store($data);
        return view('index');
//        return back()->with('index', 'Device has been deleted.');

    }

    public function commentStore(CommentStoreRequest $request)
    {

        $data = $request->validated();
        $this->service->commentStore($data);
        return view('index');
    }


}
