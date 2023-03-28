<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;

class EditController extends Controller
{
   public function __invoke(About $about)
   {
       $contacts = Contact::all();
       $ourServises = OurServise::all();
       $repairs = Repair::all();

       return view('admin.about.edit',compact('about', 'contacts', 'ourServises', 'repairs'));

   }

    public function home()
    {
        dd(1111);
//        return view('admin.about.create');
    }
}
