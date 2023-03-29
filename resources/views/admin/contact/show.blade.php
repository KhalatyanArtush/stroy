@extends('layouts.adminHeader')
    <div class="form-add">

        <form action="{{ route('admin.contact.update',$contact->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <article class="entry">
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.Tel')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="tel" value="{{ $contact->tel }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.email')}}</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="{{ $contact->email }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.address')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="address" value="{{ $contact->address }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.city')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="city" value="{{ $contact->city }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.street')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="street" value="{{ $contact->street }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.building number')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="number" value="{{ $contact->number }}">
                    </div>
                </div>

            </article><!-- End blog entry -->
            <button type="submit" class="btn btn-primary" style="width: 90px; background-color: white;">
                {{__('index.Edit')}}
            </button>
        </form>
        <form action="{{ route('admin.contact.delete',$contact->id) }}" method="post"
              style="padding-bottom: 10px;padding-top: 10px">
            @csrf
            @method('delete')

            <input type="hidden" name="title" value="{{ $contact->id }}">
            <button type="submit" class="btn btn-outline-danger" style=" background-color: white;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                     viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                    <path fill-rule="evenodd"
                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                </svg>
                {{__('index.Delete')}}
            </button>

        </form>

        <button class="btn btn-primary" style="width: 90px;"><a id="back-from-page"
                                                                href="{{ route('admin.contact.index') }}">{{__('index.Back')}}</a>
        </button>

    </div>
@include('layouts.adminFooter')

