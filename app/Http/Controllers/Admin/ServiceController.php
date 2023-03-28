<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\About\StoreRequest;
use App\Http\Requests\Admin\About\UpdateRequest;
use App\Models\Service;


class ServiceController extends Controller

{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $service = Service::first();
        return view('admin.about.index', compact('service'));
    }

    public function creat()
    {
        return view('admin.service.create');
    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.service.index');
    }

    public function update(UpdateRequest $request, Service $service)
    {
        $data= $request->validated();
        $this->service->update($service, $data);

        return redirect()->route('admin.service.edit',$service->id);

    }

    public function show(Service $service)
    {

        return view('admin.service.show',compact('service'));

    }

    public function edit(Service $service)
    {
        return view('admin.service.show',compact('service'));

    }

    public function delete(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.service.index');
    }
}

