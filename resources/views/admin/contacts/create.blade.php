@extends('layouts.main')

@section('content')
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
        <div>
            <form action="{{route('admin.contact.store')}}" method="post">
                @csrf
                <div class="form-add">

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.tel')}}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="tel">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.email')}}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.address')}}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="address">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.city')}}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="city">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.street')}}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="street">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.number')}}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="number">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">lat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="lat">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">long</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="long">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">{{__('titles.sign')}}</button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
@endsection

