<?php

namespace App\Services\Admin\Contacts;

use App\Models\Contact;
use function public_path;

class Service
{
    public function store($data)
    {

        Contact::create([
            'tel' => $data['tel'],
            'email' => $data['email'],
            'address' => $data['address'],
            'city' => $data['city'],
            'street' => $data['street'],
            'number' => $data['number'],
        ]);
    }


    public function update($about, $data)
    {
            $about->update([
                'tel' => $data['tel'],
                'email' => $data['email'],
                'address' => $data['address'],
                'city' => $data['city'],
                'street' => $data['street'],
                'number' => $data['number'],

            ]);
    }
}
