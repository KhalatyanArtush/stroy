@extends('layouts.adminHeader')

<div class="container">
    @include('inc.admin.sidebar')
    <div class="main">

        @if($errors->any())
            <div id="alertMassege">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="main-top">
            <div class="toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            <h2>{{__('index.Services')}}</h2>
        </div>
        <div class="form-block">
            <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @if ($service !== null)
                    <input type="hidden" name="ourservice_id" value="{{ $service->id }}">
                @endif
                <div class="input-box">
                    <label for="header_title">{{__('index.header title')}}</label>
                    <input type="text" name="header_title" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="title">{{__('index.title')}}</label>
                    <input type="text" name="title" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="text">{{__('index.text')}}</label>
                    <input type="text" name="text" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="image_title">{{__('index.image title')}}</label>
                    <input type="text" name="image_title" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="image_text">{{__('index.image text')}}</label>
                    <textarea rows="6" name="image_text"></textarea>
                </div>

                {{--  image for home page  --}}
                <div class="input-box">
                    <label for="img">{{ __('index.Add img in home' )}}</label>
                    <input type="file" name="img" placeholder="first line..."/>
                </div>

                {{--  images for single page  --}}
                <div class="input-box">
                    <label for="img_logo">{{__('index.Add img in single')}}</label>
                    <input type="file" name="files[]" multiple placeholder="first line..."/>
                </div>

                {{--  videos for single page  --}}
                <div class="input-box">
                    <label for="video">{{__('index.Add video in single')}}</label>
                    <input type="file" name="video" placeholder="first line..."/>
                </div>

                <div class="button-container">
                    <button type="submit" class="btn">{{__('index.Add')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('layouts.adminFooter')
