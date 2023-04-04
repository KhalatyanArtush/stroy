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
            <h2>{{__('index.Contects')}}</h2>
        </div>
        <div class="form-block">
            <form action="{{route('admin.contact.store')}}" method="post">
                @csrf
                <div class="input-box">
                    <label for="tel">{{__('index.Tel')}}</label>
                    <input type="text" name="tel" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="email">{{__('index.email')}}</label>
                    <input type="email" name="email" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="address">{{__('index.address')}}</label>
                    <input type="text" name="address" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="city">{{__('index.city')}}</label>
                    <input type="text" name="city" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="street">{{__('index.street')}}</label>
                    <input type="text" name="street" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="number">{{__('index.building number')}}</label>
                    <input type="text" name="number" placeholder="first line..."/>
                </div>

                <div class="button-container">
                    <button class="btn">{{__('index.Add')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('layouts.adminFooter')
