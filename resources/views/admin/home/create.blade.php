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
            <h2>Title 2</h2>
        </div>
        <div class="form-block">
            <form action="{{route('admin.home.store')}}" method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <label for="first">title1</label>
                    <input id="first" name="title1" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">title_running</label>
                    <input id="first" name="title_running" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">title2</label>
                    <input id="first" name="title2" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">title3</label>
                    <input id="first" name="title3" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">text</label>
                    <input id="first" name="text" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">tel</label>
                    <input id="first" name="tel" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">facebook</label>
                    <input id="first" name="facebook" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">instagram</label>
                    <input id="first" name="instagram" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">telegram</label>
                    <input id="first" name="telegram" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">whatsapp</label>
                    <input id="first" name="whatsapp" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">img1</label>
                    <input id="first" type="file" name="img1" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">img2</label>
                    <input id="first" type="file" name="img2" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">img3</label>
                    <input id="first" type="file" name="img3" placeholder="first line..."/>
                </div>

                <div class="input-box">
                    <label for="first">img_logo</label>
                    <input id="first" type="file" name="img_logo" placeholder="first line..."/>
                </div>

                <div class="button-container">
                    <button class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('layouts.adminFooter')


