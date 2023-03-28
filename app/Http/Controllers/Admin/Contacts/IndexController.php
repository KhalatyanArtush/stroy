<?php

namespace App\Http\Controllers\Admin\Contacts;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Agent;
use App\Models\BuildingType;
use App\Models\BuyRent;
use App\Models\City;
use App\Models\Contact;
use App\Models\District;
use App\Models\Home;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Region;
use App\Models\Repair;
use App\Models\Street;
use App\Models\Type;
use App\Models\Village;
use Illuminate\Http\Request;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $contacts = Contact::all();
        $address = Contact::first();
        $agents = Agent::all();
        $buildingTypes = BuildingType::all();
        $posts = Post::all();
        $buyRents = BuyRent::all();
        $districts = District::all();
        $villages = Village::all();
        $regions = Region::all();
        $streets = Street::all();
        $types = Type::all();
        $homes = Home::all();
        $citys = City::all();
        $abouts = About::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('admin.contacts.index', compact('contacts', 'repairs', 'ourServises', 'abouts', 'address', 'citys', 'posts', 'agents', 'homes', 'buildingTypes', 'buyRents', 'districts', 'villages', 'regions', 'streets', 'types'));

    }
}

