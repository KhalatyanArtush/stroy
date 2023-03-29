@extends('layouts.adminHeader')
<div class="form-add">

    <form action="{{ route('admin.service.update',$service->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <input type="hidden" name="ourservice_id" value="{{ $service->id }}">
        <article class="entry">
            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.header title')}}1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="header_title"
                           value="{{ $service->header_title }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.title')}}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="title"
                           value="{{ $service->title }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.text')}}2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="text"
                           value="{{ $service->text }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.image title')}}3</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="image_title"
                           value="{{ $service->image_title }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.image text')}}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="image_text"
                           value="{{ $service->image_text }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.img')}}</label>
                <div class="col-sm-10">
                    <img style="width: 300px; height: 300px;" src="{{ asset('ServiceHome/images/'.$service->image_path) }}">
                </div>
            </div>

            <div style="width: 14rem;">
                <label class="form-label" for="customFile">{{__('index.Add img')}}</label>
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
        </article><!-- End blog entry -->
        <button type="submit" class="btn btn-primary" style="width: 90px; background-color: white;">
            {{__('index.Edit')}}
        </button>
    </form>
    @foreach($service->files as $file)

        <div class="col-sm-10">
            <img style="width: 300px; height: 300px;" src="{{ asset('Services/images/'.$file->name) }}">
        </div>
    @endforeach

    @foreach($service->video as $video)
        <video style="display: inline-block; width: 250px; padding-bottom: 20px; padding-top: 20px"  autoplay muted controls>
            <source src="{{asset('Services/video/'.$video->name)}}"
                    type="video/mp4">
        </video>
    @endforeach
    <form action="{{ route('admin.service.delete',$service->id) }}" method="post"
          style="padding-bottom: 10px;padding-top: 10px">
        @csrf
        @method('delete')

        <input type="hidden" name="title" value="{{ $service->id }}">
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
                                                            href="{{ route('admin.services.index') }}">{{__('index.Back')}}</a>
    </button>

</div>
@include('layouts.adminFooter')

