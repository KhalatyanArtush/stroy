<?php

namespace App\Services\Admin\About;

use App\Models\About;
use function public_path;

class Service
{
    public function store($data)
    {
        $newImageName = $data['img']->getClientOriginalName();
        $data['img']->move(public_path('About/images'), $newImageName);

        About::create([
            'image_path' => $newImageName,
            'title' => $data['title'],
            'text' => $data['text'],
            'text_down' => $data['text'],
        ]);
    }


    public function update($about, $data)
    {
        if (isset($data['img'])) {
            $newImageName = $data['img']->getClientOriginalName();
            $data['img']->move(public_path('About/images'), $newImageName);

            $about->update([
                'image_path' => $newImageName,
                'title' => $data['title'],
                'text' => $data['text'],
                'text_down' => $data['text_down'],

            ]);
        } else {
            $about->update($data);
        }
    }
}
