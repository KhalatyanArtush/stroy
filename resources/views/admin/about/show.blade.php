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
            <form action="{{ route('admin.about.update',$about->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="input-box">
                    <label for="title">{{__('index.title')}}1</label>
                    <input type="text" name="title" value="{{ $about->title }}"
                           placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="text">{{__('index.text')}}</label>
                    <textarea rows="6" name="text">{{ $about->text }}</textarea>
                </div>

                <div class="input-box">
                    <label for="text_down">{{__('index.text_down')}}</label>
                    <textarea rows="6" name="text_down">{{ $about->text_down }}</textarea>
                </div>

                <div class="input-box">
                    <label for="image_path">{{__('index.img')}}</label>
                    <img style="width: 200px; height: 200px;" src="{{ asset('About/images/'.$about->image_path) }}">
                    {{--                    <label for="first">{{__('index.Add img')}}</label>--}}
                    <input type="file" name="img" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="image_path_logo">{{__('index.img logo')}}</label>
                    <img style="width: 200px; height: 200px;" src="{{ asset('About/images/'.$about->image_path_logo) }}">
                    {{--                    <label for="first">{{__('index.Add img')}}</label>--}}
                    <input type="file" name="img_logo" placeholder="first line..."/>
                </div>


                <div class="button-container">
                    <button class="btn">{{__('index.Edit')}}</button>
                </div>


            </form>


            <form action="{{ route('admin.about.delete',$about->id) }}" method="post"
                  style="padding-bottom: 10px;padding-top: 10px">
                @csrf
                @method('delete')

                <input type="hidden" name="title" value="{{ $about->id }}">
                <div class="button-container">
                    <button class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-trash"
                             viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                            <path fill-rule="evenodd"
                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                        </svg>
                        {{__('index.Delete')}}
                    </button>
                </div>
            </form>
            <div class="button-container">
                <button class="btn"><a id="back-from-page"
                                       href="{{ route('admin.about.index') }}">{{__('index.Back')}}</a></button>
            </div>

        </div>
    </div>
</div>
@include('layouts.adminFooter')

