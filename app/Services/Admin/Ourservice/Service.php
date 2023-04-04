<?php

namespace App\Services\Admin\OurService;

use App\Models\Ourservice;

class Service
{
    public function store($data){

        if (isset($data['img'])) {
            $newImageName = $data['img']->getClientOriginalName();
            $data['img']->move(public_path('ServiceHome/images'), $newImageName);
        } else {
            $newImageName = null;
        }

       Ourservice::create([
           'image_path' => $newImageName,
           'header_title' => $data['header_title'],
           'title' => $data['title'],
           'text' => $data['text'],
           'image_title' => $data['image_title'],
           'image_text' => $data['image_text'],
       ]);

    }


    public function update($service, $data){

        if (isset($data['img'])) {
            $newImageName = $data['img']->getClientOriginalName();
            $data['img']->move(public_path('ServiceHome/images'), $newImageName);
            if (is_file("ServiceHome/images/".$service->image_path)){
                unlink("ServiceHome/images/".$service->image_path);
            }
            $service->update([
                'image_path' => $newImageName,
                'header_title' => $data['header_title'],
                'title' => $data['title'],
                'text' => $data['text'],
                'image_title' => $data['image_title'],
                'image_text' => $data['image_text'],
            ]);
        } else {
            $service->update($data);
        }

    }
}
//
