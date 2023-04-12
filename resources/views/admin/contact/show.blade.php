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
            <form action="{{ route('admin.contact.update',$contact->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="input-box">
                    <label for="tel">{{__('index.Tel')}}</label>
                    <input type="text" name="tel" placeholder="first line..."
                           value="{{ $contact->tel }}"/>
                </div>

                <div class="input-box">
                    <label for="email">{{__('index.email')}}</label>
                    <input type="email" name="email" placeholder="first line..."
                           value="{{ $contact->email }}"/>
                </div>

                <div class="input-box">
                    <label for="address">{{__('index.time')}}</label>
                    <input type="text" name="time" placeholder="first line..."
                           value="{{ $contact->time }}"/>
                </div>

                <div class="input-box">
                    <label for="address">{{__('index.address')}}</label>
                    <input type="text" name="address" placeholder="first line..."
                           value="{{ $contact->address }}"/>
                </div>

                <div class="input-box">
                    <label for="city">{{__('index.city')}}</label>
                    <input type="text" name="city" placeholder="first line..."
                           value="{{ $contact->city }}"/>
                </div>

                <div class="input-box">
                    <label for="street">{{__('index.street')}}</label>
                    <input type="text" name="street" placeholder="first line..."
                           value="{{ $contact->street }}"/>
                </div>

                <div class="input-box">
                    <label for="number">{{__('index.building number')}}</label>
                    <input type="text" name="number" placeholder="first line..."
                           value="{{ $contact->number }}"/>
                </div>

                <div class="button-container">
                    <button class="btn">{{__('index.Edit')}}</button>
                </div>
            </form>
            <div class="button-container">
                <button class="btn"><a id="back-from-page"
                                       href="{{ route('admin.contact.index') }}">{{__('index.Back')}}</a></button>
            </div>
        </div>
    </div>
</div>


@include('layouts.adminFooter')

