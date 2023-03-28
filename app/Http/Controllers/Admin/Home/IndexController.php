<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FileRequest;
use App\Models\About;
use App\Models\Agent;
use App\Models\BuildingType;
use App\Models\BuyRent;
use App\Models\City;
use App\Models\Contact;
use App\Models\District;
use App\Models\HomeSlider;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Region;
use App\Models\Repair;
use App\Models\Street;
use App\Models\Type;
use App\Models\Village;
use Illuminate\Http\Request;

use App\Models\Home;

use App\Http\Requests\creatRequest;


class IndexController extends Controller
{
    public function __invoke()
    {
        $agents = Agent::all();
        $buildingTypes = BuildingType::all();
        $posts = Post::all();
        $buyRents = BuyRent::all();
        $districts = District::all();
        $villages = Village::all();
        $regions = Region::all();
        $streets = Street::all();
        $types = Type::all();
        $citys = City::all();
        $homeSliders = HomeSlider::all();
        $contacts = Contact::all();
        $abouts = About::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        $homes = Home::all();
        return view('admin.home.index', compact('homes', 'repairs', 'ourServises', 'abouts', 'contacts', 'posts', 'homeSliders', 'agents', 'buildingTypes', 'buyRents', 'citys', 'districts', 'villages','regions', 'streets', 'types'));

    }
}

