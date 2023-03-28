<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;

class DestroyController extends BaseController
{
   public function __invoke(About $about)
   {
       $about->delete();
       return redirect()->route('about');

   }

    public function home()
    {
        dd(1111);
//        return view('admin.about.create');
    }
}
