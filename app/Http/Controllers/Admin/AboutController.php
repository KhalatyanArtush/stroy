<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\About\StoreRequest;
use App\Http\Requests\Admin\About\UpdateRequest;
use App\Models\About;
use App\Services\Admin\About\Service;


class AboutController extends Controller

{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }

    public function creat()
    {
        return view('admin.about.create');
    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.about.index');
    }

    public function update(UpdateRequest $request, About $about)
    {
        $data= $request->validated();
        $this->service->update($about, $data);

        return redirect()->route('admin.about.edit',$about->id);

    }

    public function show(About $about)
    {

        return view('admin.about.show',compact('about'));

    }

    public function edit(About $about)
    {
        return view('admin.about.show',compact('about'));

    }

    public function delete(About $about)
    {
        $image_path = "About/images/".$about->image_path;
        $image_path_logo = "About/images/".$about->image_path_logo;
        unlink($image_path);
        unlink($image_path_logo);
        $about->delete();
        return redirect()->route('admin.home.index');
    }
}

