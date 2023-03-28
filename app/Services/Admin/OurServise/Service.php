<?php

namespace App\Services\Admin\OurServise;

use App\Models\Servise;

class Service
{
    public function store($data)
    {
        $newImageName = $data['img']->getClientOriginalName();
        $data['img']->move(public_path('Service/images'), $newImageName);

        Servise::create([
            'image_path' => $newImageName,
            'title' => $data['title'],
            'text' => $data['text'],
            'text_down' => $data['text'],
        ]);
    }


    public function update($ourServise, $data)
    {
        if (isset($data['img'])) {
            $newImageName = $data['img']->getClientOriginalName();
            $data['img']->move(public_path('Service/images'), $newImageName);

            $ourServise->update([
                'image_path' => $newImageName,
                'title' => $data['title'],
                'text' => $data['text'],
                'text_down' => $data['text_down'],

            ]);
        } else {
            $ourServise->update($data);
        }
    }
}
