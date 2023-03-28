<?php

namespace App\Services\Admin;

use App\Models\Home;
use function public_path;

class HomeService
{
    public function store($data){

        //        $newImageName2 = time() . '.' . $data['img2']->extension();
        $newImageName1 = $data['img1']->getClientOriginalName();
        $newImageName2 = $data['img2']->getClientOriginalName();
        $newImageName3 = $data['img3']->getClientOriginalName();
        $newImageNameLogo = $data['img_logo']->getClientOriginalName();
        $data['img1']->move(public_path('Home/images'), $newImageName1);
        $data['img2']->move(public_path('Home/images'), $newImageName2);
        $data['img3']->move(public_path('Home/images'), $newImageName3);
        $data['img_logo']->move(public_path('Home/images'), $newImageNameLogo);

        Home::create([
            'image_path1' => $newImageName1,
            'image_path2' => $newImageName2,
            'image_path3' => $newImageName3,
            'image_path_logo' => $newImageNameLogo,
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

    public function update($home, $data)
    {

        if (isset($data['img1'], $data['img2'], $data['img3'], $data['img_logo'])) {

            $newImageName1 = $data['img1']->getClientOriginalName();
            $newImageName2 = $data['img2']->getClientOriginalName();
            $newImageName3 = $data['img3']->getClientOriginalName();
            $newImageNameLogo = $data['img_logo']->getClientOriginalName();
            $data['img1']->move(public_path('Home/images'), $newImageName1);
            $data['img2']->move(public_path('Home/images'), $newImageName2);
            $data['img3']->move(public_path('Home/images'), $newImageName3);
            $data['img_logo']->move(public_path('Home/images'), $newImageNameLogo);

            $home->update([
                'image_path1' => $newImageName1,
                'image_path2' => $newImageName2,
                'image_path3' => $newImageName3,
                'image_path_logo' => $newImageNameLogo,
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
        } else {
            $home->update($data);
        }
    }

  }
