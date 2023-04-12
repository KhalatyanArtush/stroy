<?php

namespace App\Services\Admin\Home;

use App\Models\Home;
use function public_path;

class Service
{
    public function store($data){

        //        $newImageName2 = time() . '.' . $data['img2']->extension();
//        $newImageName1 = $data['img1']->getClientOriginalName();
//        $newImageName2 = $data['img2']->getClientOriginalName();
//        $newImageName3 = $data['img3']->getClientOriginalName();
//        $newImageNameLogo = $data['img_logo']->getClientOriginalName();
//        $data['img1']->move(public_path('Home/images'), $newImageName1);
//        $data['img2']->move(public_path('Home/images'), $newImageName2);
//        $data['img3']->move(public_path('Home/images'), $newImageName3);
//        $data['img_logo']->move(public_path('Home/images'), $newImageNameLogo);


        if (isset($data['img1'])) {
            $newImageName1 = $data['img1']->getClientOriginalName();
            $data['img1']->move(public_path('Home/images'), $newImageName1);
        } else {
            $newImageName1 = null;
        }
        if (isset($data['img2'])) {
            $newImageName2 = $data['img2']->getClientOriginalName();
            $data['img2']->move(public_path('Home/images'), $newImageName2);
        } else {
            $newImageName2 = null;
        }
        if (isset($data['img3'])) {
            $newImageName3 = $data['img3']->getClientOriginalName();
            $data['img3']->move(public_path('Home/images'), $newImageName3);
        } else {
            $newImageName3 = null;
        }
        if (isset($data['img_logo'])) {
            $newImageNameLogo = $data['img_logo']->getClientOriginalName();
            $data['img_logo']->move(public_path('Home/images'), $newImageNameLogo);
        } else {
            $newImageNameLogo = null;
        }

        Home::create([
            'image_path1' => $newImageName1,
            'image_path2' => $newImageName2,
            'image_path3' => $newImageName3,
            'image_path_logo' => $newImageNameLogo,
            'title1' => $data['title1'],
            'title2' => $data['title2'],
            'title_running' => $data['title_running'],
            'tel' => $data['tel'],
            'text' => $data['text'],
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'telegram' => $data['telegram'],
            'whatsapp' => $data['whatsapp'],

        ]);
    }

    public function update($home, $data)
    {

        if (isset($data['img1']) || isset($data['img2'])  || isset($data['img3'])  || isset($data['img_logo'])) {
            $arr = [];
            if (isset($data['img1'])){
                $arr['image_path1']=$data['img1']->getClientOriginalName();
                $data['img1']->move(public_path('Home/images'), $data['img1']->getClientOriginalName());
            }
            if (isset($data['img2'])){
                $arr['image_path2']= $data['img2']->getClientOriginalName();
                $data['img2']->move(public_path('Home/images'), $data['img2']->getClientOriginalName());
            }
            if (isset($data['img3'])){
                $arr['image_path3']= $data['img3']->getClientOriginalName();
                $data['img3']->move(public_path('Home/images'), $data['img3']->getClientOriginalName());
            }
            if (isset($data['img_logo'])){
                $arr['image_path_logo']= $data['img_logo']->getClientOriginalName();
                $data['img_logo']->move(public_path('Home/images'), $data['img_logo']->getClientOriginalName());
            }



//            $newImageName1 = $data['img1']->getClientOriginalName();
//            $newImageName2 = $data['img2']->getClientOriginalName();
//            $newImageName3 = $data['img3']->getClientOriginalName();
//            $newImageNameLogo = $data['img_logo']->getClientOriginalName();
//            $data['img1']->move(public_path('Home/images'), $newImageName1);
//            $data['img2']->move(public_path('Home/images'), $newImageName2);
//            $data['img3']->move(public_path('Home/images'), $newImageName3);
//            $data['img_logo']->move(public_path('Home/images'), $newImageNameLogo);

            $home->update(
                $arr);
            $home->update([
//                'image_path1' => $newImageName1,
//                'image_path2' => $newImageName2,
//                'image_path3' => $newImageName3,
//                'image_path_logo' => $newImageNameLogo,
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
