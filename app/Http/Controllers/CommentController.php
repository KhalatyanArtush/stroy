<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
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

    public function store(CommentStoreRequest $request)
    {

        $data = $request->validated();
        $this->service->store($data);
        return back()->with('index', 'Device has been deleted.');

    }
}
