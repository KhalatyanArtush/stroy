<?php

namespace App\Services\Admin\OurServise;

use App\Models\OurServise;

class Service
{
    public function store($data)
    {
        OurServise::create($data);
    }


    public function update($ourServise, $data)
    {
        $ourServise->update($data);
    }
}
