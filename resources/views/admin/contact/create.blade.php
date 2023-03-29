@extends('layouts.adminHeader')


<div id="creatDiv">

    @if($errors->any())
        <div id="alertMassege">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error  }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div style="margin-top: 100px; background-color: #c3aaaa;">
        <form action="{{route('admin.contact.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-add">

                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.Tel')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="tel">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.email')}}</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.address')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="address">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.city')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="city">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.street')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="street">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.building number')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="number">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">{{__('index.Add')}}</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@include('layouts.adminFooter')


