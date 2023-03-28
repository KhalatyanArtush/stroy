<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Agent;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use Illuminate\Http\Request;


use App\Http\Requests\creatRequest;


class ShowController extends BaseController
{
    public function __invoke(Agent $agent)
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();


        return view('admin.agent.show',compact('agent', 'contacts', 'repairs', 'ourServises'));

    }

    public function home()
    {
        dd(1111);
//        return view('admin.about.create');
    }
}

