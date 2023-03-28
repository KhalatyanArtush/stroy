<?php

namespace App\Http\Controllers\Admin\Contacts;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;

class ShowController extends BaseController
{
    public function __invoke(Contact $contact)
    {
        $ourServises = OurServise::all();
        $contacts = Contact::all();
        $repairs = Repair::all();


        return view('admin.contacts.show',compact('contact', 'repairs', 'ourServises', 'contacts'));

    }
}

