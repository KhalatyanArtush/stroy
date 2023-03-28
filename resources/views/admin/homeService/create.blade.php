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
            <form action="{{route('admin.homeService.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-add">

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">{{__('index.text')}}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="text">
                        </div>
                    </div>

                    <div style="width: 14rem;">
                        <label class="form-label" for="customFile">{{__('index.Add img')}}</label>
                        <input type="file" class="form-control" id="customFile" name="img">
                    </div>

                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">{{__('index.Add')}}</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
@include('layouts.adminFooter')


