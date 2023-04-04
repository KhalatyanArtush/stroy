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
            <form action="{{ route('admin.home.update',$home->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="input-box">
                    <label for="title1">{{__('index.title')}}1</label>
                    <input type="text" name="title1" value="{{ $home->title1 }}"
                           placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="title_running">{{__('index.title_running')}}</label>
                    <input type="text" name="title_running" value="{{ $home->title_running }}"
                           placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="title2">{{__('index.title')}}2</label>
                    <input type="text" name="title2" value="{{ $home->title2 }}"
                           placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="title3">{{__('index.title')}}3</label>
                    <input type="text" name="title3" value="{{ $home->title3 }}"
                           placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="text">{{__('index.text')}}</label>
                    <textarea rows="6" name="text">{{ $home->text }}</textarea>
                </div>

                <div class="input-box">
                    <label for="tel">{{__('index.tel')}}</label>
                    <input type="text" name="tel" value="{{ $home->tel }}" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="facebook">{{__('index.facebook')}}</label>
                    <input type="text" name="facebook" value="{{ $home->facebook }}"
                           placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="instagram">{{__('index.instagram')}}</label>
                    <input type="text" name="instagram" value="{{ $home->instagram }}"
                           placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="telegram">{{__('index.telegram')}}</label>
                    <input type="text" name="telegram" value="{{ $home->telegram }}"
                           placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="whatsapp">{{__('index.whatsapp')}}</label>
                    <input type="text" name="whatsapp" value="{{ $home->whatsapp }}"
                           placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="img1">{{__('index.img')}}1</label>
                    <img style="width: 200px; height: 200px;" src="{{ asset('Home/images/'.$home->image_path1) }}">
{{--                    <label for="first">{{__('index.Add img')}}</label>--}}
                    <input type="file" name="img1" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="img2">{{__('index.img')}}2</label>
                    <img style="width: 200px; height: 200px;" src="{{ asset('Home/images/'.$home->image_path2) }}">
{{--                    <label for="first">{{__('index.Add img')}}</label>--}}
                    <input type="file" name="img2" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="img3">{{__('index.img')}}3</label>
                    <img style="width: 200px; height: 200px;" src="{{ asset('Home/images/'.$home->image_path3) }}">
{{--                    <label for="first">{{__('index.Add img')}}</label>--}}
                    <input type="file" name="img3" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="img_logo">{{__('index.img')}} logo</label>
                    <img style="width: 200px; height: 200px;" src="{{ asset('Home/images/'.$home->image_path_logo) }}">
{{--                    <label for="first">{{__('index.Add img')}}</label>--}}
                    <input type="file" name="img_logo" placeholder="first line..."/>
                </div>

                <div class="button-container">
                    <button class="btn">{{__('index.Edit')}}</button>
                </div>


            </form>


            <form action="{{ route('admin.home.delete',$home->id) }}" method="post"
                  style="padding-bottom: 10px;padding-top: 10px">
                @csrf
                @method('delete')

                <input type="hidden" name="title" value="{{ $home->id }}">
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
                                       href="{{ route('admin.home.index') }}">{{__('index.Back')}}</a></button>
            </div>

        </div>
    </div>
</div>
@include('layouts.adminFooter')
