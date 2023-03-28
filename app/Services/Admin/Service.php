<?php

namespace App\Services\Admin;

use App\Models\Home;
use App\Models\HomeService;
use function public_path;

class Service
{
    public function homeStore($data){

        //        $newImageName2 = time() . '.' . $data['img2']->extension();
        $newImageName1 = $data['img1']->getClientOriginalName();
        $newImageName2 = $data['img2']->getClientOriginalName();
        $newImageName3 = $data['img3']->getClientOriginalName();
        $data['img1']->move(public_path('Home/images'), $newImageName1);
        $data['img2']->move(public_path('Home/images'), $newImageName2);
        $data['img3']->move(public_path('Home/images'), $newImageName3);

        Home::create([
            'image_path1' => $newImageName1,
            'image_path2' => $newImageName2,
            'image_path3' => $newImageName3,
            'title1' => $data['title1'],
            'title2' => $data['title2'],
            'title3' => $data['title3'],
            'title_running' => $data['title_running'],
            'tel' => $data['tel'],
            'text' => $data['text'],
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'telegram' => $data['telegram'],
            'whatsapp' => $data['whatsapp'],
            'twitter' => $data['twitter'],

        ]);
    }


    public function homeUpdate($about, $data){

        if (isset($data['img'])){
        $newImageName = time() . '.' . $data['img']->extension();
        $data['img']->move(public_path('About/images'), $newImageName);

            $about->update([
            'image_path' => $newImageName,
            'title' => $data['title'],
            'text' => $data['text'],

        ]);
        } else {
            $about->update($data);
        }
    }


    public function homeServiceStore($data){

       dd($data);
        $newImageName = $data['img']->getClientOriginalName();
        $data['img']->move(public_path('HomeServices/images'), $newImageName);

        HomeService::create([
            'image_path' => $newImageName,
            'text' => $data['text'],

        ]);
    }



}
