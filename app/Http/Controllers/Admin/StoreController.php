<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Home\StoreRequest;
use App\Models\About;

class StoreController extends BaseController
{
   public function __invoke(StoreRequest $request)
   {
//       $newImageName = time() . '.' . $request->img->extension();
//
//       $request->img->move(public_path('Home/images'), $newImageName);

       $data = $request->validated();
   $this->service->store($data);


       return redirect()->route('about');
   }
//
//    public function home(StoreRequest $request)
//    {
//        $data = $request->validated();
//        $this->service->homeStore($data);
//
//
//        return redirect()->route('admin.home.index');
////        return view('admin.about.create');
//    }

//    public function homeService(App\Http\Requests\Admin\HomeServ $request)
//    {
//        dd($request);
//        $data = $request->validated();
//        $this->service->homeServiceStore($data);
//
//
//        return redirect()->route('admin.home.index');
////        return view('admin.about.create');
//    }
}
