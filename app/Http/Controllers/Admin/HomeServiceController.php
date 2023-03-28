<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HomeService\StoreRequest;
use App\Models\HomeService;
use App\Services\Admin\HomeServicesService;


class HomeServiceController extends Controller

{
    public $service;

    public function __construct(HomeServicesService $service)
    {
        $this->service = $service;
    }


    public function index()
    {
        $homeServices = HomeService::all();
        return view('admin.homeService.index', compact('homeServices'));
    }

    public function creat()
    {
        return view('admin.homeService.create');
    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);


        return redirect()->route('admin.homeService.index');
//        return view('admin.about.create');
    }
}

