<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Home;

class ContactController extends Controller
{

public function __invoke(){

    $home = Home::first();
    $contacts = Contact::first();

    return view('contacts',compact('contacts','home'));

    }
}
