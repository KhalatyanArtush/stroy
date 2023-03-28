<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\About\UpdateRequest;
use App\Models\About;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, About $about)
   {
       $data= $request->validated();
       $this->service->update($about, $data);

       return redirect()->route('admin.about.edit',$about->id);

   }
}
