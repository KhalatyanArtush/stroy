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
            <h2>{{__('index.Home')}}</h2>
        </div>
        <div class="form-block">
            <form action="{{route('admin.home.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-box">
                    <label for="title1">{{__('index.title')}}1</label>
                    <input type="text" name="title1" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="title_running">{{__('index.title_running')}}</label>
                    <input type="text" name="title_running" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="title2">{{__('index.title')}}2</label>
                    <input type="text" name="title2" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="title3">{{__('index.title')}}3</label>
                    <input type="text" name="title3" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="text">{{__('index.text')}}</label>
                    <textarea rows="6" name="text"></textarea>
                </div>

                <div class="input-box">
                    <label for="tel">{{__('index.tel')}}</label>
                    <input type="text" name="tel" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="facebook">facebook</label>
                    <input type="text" name="facebook" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="instagram">instagram</label>
                    <input type="text" name="instagram" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="telegram">telegram</label>
                    <input type="text" name="telegram" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="whatsapp">whatsapp</label>
                    <input type="text" name="whatsapp" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="img1">{{__('index.img1')}}</label>
                    <input type="file" name="img1" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="img2">{{__('index.img2')}}</label>
                    <input type="file" name="img2" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="img3">{{__('index.img3')}}</label>
                    <input  type="file" name="img3" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="img_logo">{{__('index.img_logo')}}</label>
                    <input type="file" name="img_logo" placeholder="first line..."/>
                </div>

                <div class="button-container">
                    <button class="btn">{{__('index.Add')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('layouts.adminFooter')


