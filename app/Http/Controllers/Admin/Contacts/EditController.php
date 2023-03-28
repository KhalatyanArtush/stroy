<?php

namespace App\Http\Controllers\Admin\Contacts;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;

class EditController extends BaseController
{
   public function __invoke(Contact $contact)
   {
       $ourServises = OurServise::all();
       $repairs = Repair::all();

       return view('admin.contacts.edit',compact('contact', 'repairs', 'ourServises'));

   }
}
