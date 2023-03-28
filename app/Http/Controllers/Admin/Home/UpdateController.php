<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Home\UpdateRequest;
use App\Models\Home;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, Home $home)
   {
       $data= $request->validated();
       $this->service->update($home, $data);

       return redirect()->route('admin.home.show',$home->id);

   }
}
