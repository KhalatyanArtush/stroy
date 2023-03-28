<?php

namespace App\Services\Admin\Contacts;

use App\Models\Contact;
use function public_path;

class Service
{
    public function store($data)
    {

        Contact::create($data);
    }


    public function update($contact, $data)
    {
        $contact->update($data);
    }
}
