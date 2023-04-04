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
                <h2>Title 2</h2>
            </div>
            <div class="form-block">
                <form action="{{route('admin.about.store')}}" method="post" enctype="multipart/form-data">
                    <div class="input-box">
                        <label for="title">{{__('index.title')}}</label>
                        <input type="text" name="title" placeholder="first line..."/>
                    </div>

                    <div class="input-box">
                        <label for="text">{{__('index.text')}}</label>
                        <input type="text" name="text" placeholder="first line..."/>
                    </div>

                    <div class="input-box">
                        <label for="text_down">{{__('index.text_down')}}</label>
                        <input type="text" name="text_down" placeholder="first line..."/>
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


