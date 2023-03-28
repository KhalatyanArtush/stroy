<?php

namespace App\Http\Controllers\Admin\Contacts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Contact\UpdateRequest;
use App\Models\Contact;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, Contact $contact)
   {
       $data= $request->validated();

       $this->service->update($contact, $data);

       return redirect()->route('admin.contact.show',$contact->id);

   }

}
