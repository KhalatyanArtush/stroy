<?php

namespace App\Services\Admin;

use App\Models\HomeService;
use function public_path;

class HomeServicesService
{

    public function store($data){

        $newImageName = $data['img']->getClientOriginalName();
        $data['img']->move(public_path('HomeServices/images'), $newImageName);

        HomeService::create([
            'image_path' => $newImageName,
            'text' => $data['text'],

        ]);
    }



}
