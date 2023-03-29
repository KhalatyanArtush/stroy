<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Home\StoreRequest;
use App\Http\Requests\Admin\Home\UpdateRequest;
use App\Models\Home;
use App\Services\Admin\Home\Service;


class HomeController extends Controller

{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $home = Home::first();
        return view('admin.home.index', compact('home'));
    }

    public function creat()
    {
        return view('admin.home.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.home.index');
    }

    public function update(UpdateRequest $request, Home $home)
    {
        $data= $request->validated();
        $this->service->update($home, $data);

        return redirect()->route('admin.home.edit',$home->id);

    }


    public function show(Home $home)
    {

        return view('admin.home.show',compact('home'));

    }

    public function edit(Home $home)
    {
        return view('admin.home.show',compact('home'));

    }

    public function delete(Home $home)
    {
//        xndir ka 1 nkari bacakayutyan depqum errora talis
        $image_path1 = "Home/images/".$home->image_path1;
        $image_path2 = "Home/images/".$home->image_path2;
        $image_path3 = "Home/images/".$home->image_path3;
        $image_path_logo = "Home/images/".$home->image_path_logo;
        unlink($image_path1);
        unlink($image_path2);
        unlink($image_path3);
        unlink($image_path_logo);
        $home->delete();
        return redirect()->route('admin.home.index');
    }
}

