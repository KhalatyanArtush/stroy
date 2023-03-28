<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\HomeService;
use App\Models\OurServise;
use App\Models\Repair;
use Illuminate\Http\Request;

use App\Http\Requests\creatRequest;


class IndexController extends Controller
{

    public function __invoke()
    {

        $home = Home::first();
        $homeServices = HomeService::all();

//        $address = Contact::first();
//        $contacts = Contact::all();
//        $ourServises = Servise::all();
//        $repairs = Repair::all();

        return view('index', compact('home', 'homeServices'));
        return view('about');

    }
}