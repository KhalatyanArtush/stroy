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
                <h2>{{__('index.About us')}}</h2>
            </div>
            <div class="form-block">
                <form action="{{route('admin.about.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-box">
                        <label for="title">{{__('index.title')}}</label>
                        <input type="text" name="title" placeholder="first line..."/>
                    </div>

                    <div class="input-box">
                        <label for="text">{{__('index.text')}}</label>
                        <textarea rows="6" name="text"></textarea>
                    </div>

                    <div class="input-box">
                        <label for="text_down">{{__('index.text_down')}}</label>
                        <textarea rows="6" name="text_down"></textarea>
                    </div>

                    <div class="input-box">
                        <label for="img">{{__('index.Add img')}}</label>
                        <input type="file" name="img" placeholder="first line..."/>
                    </div>

                    <div class="input-box">
                        <label for="img_logo">{{__('index.img logo')}}</label>
                        <input type="file" name="img_logo" placeholder="first line..."/>
                    </div>

                    <div class="button-container">
                        <button type="submit" class="btn">{{__('index.Add')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@include('layouts.adminFooter')


