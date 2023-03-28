<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home;

class DestroyController extends BaseController
{
   public function __invoke(Home $home)
   {
       $home->delete();
       return redirect()->route('admin.home.index');

   }
}
