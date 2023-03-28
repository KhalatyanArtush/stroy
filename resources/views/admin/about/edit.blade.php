@extends('layouts.main')

@section('content')
    <div class="form-add">

        <form action="{{route('admin.about.update', $about->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('patch')

            <div style="width: 14rem; padding-bottom: 20px">
                <label class="form-label " for="customFile"> {{__('titles.img')}}</label>
                <img src="{{ asset ('About/images/'.$about->image_path)}}" class="img-fluid" alt="">
                <input type="file" class="form-control" id="customFile" name="img">

            </div>

            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.title')}}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{ $about->title }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.text')}}</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="text" id="exampleFormControlTextarea1"
                              rows="3">{{ $about->text }}</textarea></div>
            </div>



                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary"> {{__('buttons.Edit')}}</button>
                        <button  class="btn btn-primary" > <a id="back-from-page" href="{{ route('admin.about.index') }}"> {{__('buttons.Back')}}</a>
                        </button>


                    </div>
                </div>


        </form>

    </div>
@endsection

