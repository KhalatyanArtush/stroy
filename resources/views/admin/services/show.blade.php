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
            <form action="{{route('admin.service.update',$service->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                @if ($service !== null)
                    <input type="hidden" name="ourservice_id" value="{{ $service->id }}">
                @endif
                <div class="input-box">
                    <label for="header_title">{{__('index.header title')}}</label>
                    <input type="text" name="header_title" placeholder="first line..."
                           value="{{ $service->header_title }}"/>
                </div>

                <div class="input-box">
                    <label for="title">{{__('index.title')}}</label>
                    <input type="text" name="title" placeholder="first line..."
                           value="{{ $service->title }}"/>
                </div>

                <div class="input-box">
                    <label for="text">{{__('index.text')}}</label>
                    <textarea rows="6" name="text">{{ $service->text }}</textarea>
                </div>

                <div class="input-box">
                    <label for="image_title">{{__('index.image title')}}</label>
                    <input type="text" name="image_title" placeholder="first line..."
                           value="{{ $service->image_title }}"/>
                </div>

                <div class="input-box">
                    <label for="image_text">{{__('index.image text')}}</label>
                    <input type="text" name="image_text" placeholder="first line..."
                           value="{{ $service->image_text }}"/>
                </div>

                {{--  image for home page  --}}
                <div class="input-box">
                    <label for="img">{{ __('index.Add img in home' )}}</label>
                    <img style="width: 200px; height: 200px;"
                         src="{{ asset('ServiceHome/images/'.$service->image_path) }}">
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
                    <button type="submit" class="btn">{{__('index.Edit')}}</button>
                </div>
            </form>

            <form action="{{ route('admin.file.delete') }}" method="post">
                @csrf
                @method('delete')
                @foreach($service->files as $file)

                    <div class="input-box">
                        <label class="form-label " for="customFile"> </label>
                        <img style="width: 300px; height: 300px;" src="{{asset('Services/images/'.$file->name)}}" alt=""
                             class="img-fluid">
                        <input name="image_id" type="hidden" value="{{$file->id}}">
                        <input name="name" type="hidden" value="{{$file->name}}">
                        <input name="ourservice_id" type="hidden" value="{{$service->id}}">

                        <div class="button-container">
                            <button type="submit" class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd"
                                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                </svg>
                                {{ __('index.Delete' )}}
                            </button>
                        </div>
                    </div>

                @endforeach
            </form>

            <form action="{{ route('admin.video.delete') }}" method="post">
                @foreach($service->video as $video)
                    @csrf
                    @method('delete')
                    <div class="input-box">
                        <label class="form-label " for="customFile"> </label>
                        <video style="display: inline-block; width: 250px; padding-bottom: 20px; padding-top: 20px" autoplay
                               muted controls>
                            <source src="{{asset('Services/video/'.$video->name)}}"
                                    type="video/mp4">
                        </video>
                        <input name="image_id" type="hidden" value="{{$video->id}}">
                        <input name="name" type="hidden" value="{{$video->name}}">
                        <input name="ourservice_id" type="hidden" value="{{$service->id}}">

                        <div class="button-container">
                            <button type="submit" class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd"
                                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                </svg>
                                {{ __('index.Delete' )}}
                            </button>
                        </div>
                    </div>


                @endforeach
            </form>
            <form action="{{ route('admin.service.delete',$service->id) }}" method="post"
                  style="padding-bottom: 10px;padding-top: 10px">
                @csrf
                @method('delete')

                <input type="hidden" name="title" value="{{ $service->id }}">
                <div class="button-container">
                    <button type="submit" class="btn">
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
                <button type="submit" class="btn"><a id="back-from-page"
                                                     href="{{ route('admin.services.index') }}">{{__('index.Back')}}</a>
                </button>
            </div>

        </div>
    </div>
</div>

@include('layouts.adminFooter')
