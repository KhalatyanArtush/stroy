<?php

namespace App\Services\Admin\About;

use App\Models\About;
use function public_path;

class Service
{
    public function store($data)
    {
//        $newImageName = $data['img']->getClientOriginalName();
//        $data['img']->move(public_path('About/images'), $newImageName);
//        $newImageNameLogo = $data['img_logo']->getClientOriginalName();
//        $data['img_logo']->move(public_path('About/images'), $newImageNameLogo);

        if (isset($data['img'])) {
            $newImageName = $data['img']->getClientOriginalName();
            $data['img']->move(public_path('About/images'), $newImageName);
        } else {
            $newImageName = null;
        }
        if (isset($data['img_logo'])) {
            $newImageNameLogo = $data['img_logo']->getClientOriginalName();
            $data['img_logo']->move(public_path('About/images'), $newImageNameLogo);
        } else {
            $newImageNameLogo = null;
        }


        About::create([
            'image_path' => $newImageName,
            'image_path_logo' => $newImageNameLogo,
            'title' => $data['title'],
            'text' => $data['text'],
            'text_down' => $data['text'],
        ]);
    }


    public function update($about, $data)
    {
//        if (isset($data['img'])) {
//            $newImageName = $data['img']->getClientOriginalName();
//            $data['img']->move(public_path('About/images'), $newImageName);

        if (isset($data['img']) || isset($data['img_logo'])) {
            $arr = [];
            if (isset($data['img'])) {
                $arr['image_path'] = $data['img']->getClientOriginalName();
                $data['img']->move(public_path('About/images'), $data['img']->getClientOriginalName());
            }
            if (isset($data['img_logo'])) {
                $arr['image_path_logo'] = $data['img_logo']->getClientOriginalName();
                $data['img_logo']->move(public_path('About/images'), $data['img_logo']->getClientOriginalName());
            }

            $about->update(
                $arr);
            $about->update([
//                'image_path' => $newImageName,
                'title' => $data['title'],
                'text' => $data['text'],
                'text_down' => $data['text_down'],

            ]);
        } else {
            $about->update($data);
        }
    }
}
