<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Home\StoreRequest;
use App\Models\Home;

class StoreController extends BaseController
{
   public function __invoke(StoreRequest $request)
   {
//       $newImageName = time() . '.' . $request->img->extension();
//
//       $request->img->move(public_path('Home/images'), $newImageName);

       $data = $request->validated();
   $this->service->store($data);


       return redirect()->route('admin.home.index');
   }
}
