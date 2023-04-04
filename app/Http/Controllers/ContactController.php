<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Home;
use App\Models\Ourservice;

class ContactController extends Controller
{

public function __invoke(){

    $home = Home::first();
    $contact = Contact::first();
    $services = Ourservice::all();

    return view('contacts',compact('contact','home', 'services'));

    }
}
