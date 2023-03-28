<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Agent;
use App\Models\BuildingType;
use App\Models\BuyRent;
use App\Models\City;
use App\Models\Contact;
use App\Models\District;
use App\Models\Home;
use App\Models\HomeService;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Region;
use App\Models\Repair;
use App\Models\Street;
use App\Models\Type;
use App\Models\Village;
use Illuminate\Http\Request;


use App\Http\Requests\creatRequest;


class IndexController extends BaseController
{
    public function post()
    {
//        $posts = POST::all();
//        $buildingTypes = BuildingType::all();
//        $buyRents = BuyRent::all();
//        $citys = City::all();
//        $districts = District::all();
//        $villages = Village::all();
//        $regions = Region::all();
//        $streets = Street::all();
//        $types = Type::all();
//        $homes = Home::all();
//        $agents = Agent::all();
//        $contacts = Contact::all();
//        $ourServises = Servise::all();
//        $repairs = Repair::all();
//
//        $about = About::first();
        return view('admin.posts.index');
        return view('admin.about.index', compact('about', 'repairs', 'ourServises', 'contacts', 'agents', 'posts','homes', 'buildingTypes', 'buyRents', 'citys', 'districts', 'villages', 'regions', 'streets', 'types'));
    }

    public function home()
    {
        $home = Home::first();
        return view('admin.home.index', compact('home'));
    }

    public function homeService()
    {
        $homeServices = HomeService::all();
        return view('admin.homeService.index', compact('homeServices'));
    }


    public function about()
    {
        return view('admin.about.index');
    }


    public function contact()
    {
        return view('admin.contact.index');
    }

    public function services()
    {
        return view('admin.services.index');
    }
}

