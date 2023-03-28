<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\About;

class DestroyController extends BaseController
{
   public function __invoke(About $about)
   {
       $about->delete();
       return redirect()->route('about');

   }
}
