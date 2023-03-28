<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\OurServise;
use App\Models\Repair;


class ShowController extends BaseController
{
   public function __invoke(Home $home)
   {
       $contacts = Contact::all();
       $ourServises = OurServise::all();
       $repairs = Repair::all();


       return view('admin.home.show',compact('home', 'repairs', 'contacts', 'ourServises'));

   }
}
