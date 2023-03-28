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
            <form action="{{route('admin.home.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-add">

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">title1{{__('titles.tel')}}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title1">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">title_running</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title_running">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">title2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title2">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">title3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">text</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="text">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">tel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="tel">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">twitter</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="twitter">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">facebook</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="facebook">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">instagram</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="instagram">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">telegram</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="telegram">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">whatsapp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="whatsapp">
                        </div>
                    </div>


                    <div style="width: 14rem;">
                        <label class="form-label" for="customFile">կցել նկար</label>
                        <input type="file" class="form-control" id="customFile" name="img1">
                    </div>

                    <div style="width: 14rem;">
                        <label class="form-label" for="customFile">կցել նկար</label>
                        <input type="file" class="form-control" id="customFile" name="img2">
                    </div>

                    <div style="width: 14rem;">
                        <label class="form-label" for="customFile">կցել նկար</label>
                        <input type="file" class="form-control" id="customFile" name="img3">
                    </div>

                    <div style="width: 14rem;">
                        <label class="form-label" for="customFile">կցել նկար</label>
                        <input type="file" class="form-control" id="customFile" name="img_logo">
                    </div>

                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">{{__('titles.sign')}}</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
@include('layouts.adminFooter')


