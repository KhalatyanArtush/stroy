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
        <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($service !== null)
                <input type="hidden" name="ourservice_id" value="{{ $service->id }}">
            @endif
            <div class="form-add">

                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.header title')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="header_title">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.title')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.text')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.image title')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="image_title">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.image text')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="image_text">
                    </div>
                </div>

                {{--  image for home page  --}}
                <div style="width: 14rem;">
                    <label class="form-label" for="customFile">{{ __('index.Add img in home' )}}</label>
                    <input type="file" class="form-control" id="customFile" name="img">
                </div>

                {{--  images for single page  --}}
                <div style="width: 14rem;">
                    <label class="form-label" for="customFile">{{ __('index.Add img in single' )}}</label>
                    <input type="file" class="form-control" id="customFile" name="files[]" multiple>
                </div>

                {{--  videos for single page  --}}
                <div style="width: 14rem;">
                    <label class="form-label" for="customFile">{{ __('index.Add video in single' )}}</label>
                    <input type="file" class="form-control" id="customFile" name="video[]" multiple>
                </div>

                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">{{__('index.sign')}}</button>
                    </div>
                </div>

            </div>

        </form>
    </div>
@include('layouts.adminFooter')


