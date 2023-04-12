<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Contact\StoreRequest;
use App\Http\Requests\Admin\Contact\UpdateRequest;
use App\Models\Contact;
use App\Services\Admin\Contacts\Service;


class ContactController extends Controller

{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $contact = Contact::first();
        return view('admin.contact.index', compact('contact'));
    }

    public function creat()
    {
        return view('admin.contact.create');
    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.contact.index');
    }

    public function update(UpdateRequest $request, Contact $contact)
    {
        $data= $request->validated();
        $this->service->update($contact, $data);

        return redirect()->route('admin.contact.edit',$contact->id);

    }

    public function show(Contact $contact)
    {

        return view('admin.contact.show',compact('contact'));

    }

    public function edit(Contact $contact)
    {
        return view('admin.contact.show',compact('contact'));

    }

//    public function delete(Contact $contact)
//    {
//        $contact->delete();
//        return redirect()->route('admin.contact.index');
//    }
}

