@extends('layouts.main')

@section('content')

    <main>
        <section class="wrapper">
            <div class="page_title_glav_block">
                <div>
                    <h1>{{__('index.About us')}}</h1>

                </div>
            </div>
        </section>
        <section class="wrapper">
            <div class="gigs_miks">
                <div class="gigs_miks_photo_block">
                    <img src="{{ asset('About/images/'.$about->image_path) }}" alt="">
{{--                    <div class="loader_gigs">--}}
{{--                        <img src="img/load_photo.png" alt="">--}}
{{--                    </div>--}}
                </div>
                <div class="gigs_miks_text_block">
                    <p class="gigs_miks_text_title_blue">{{ $about->title }}</p>
                    <p class="gigs_miks_text_normal">
                        {{ $about->text }}
                    </p>
                </div>
            </div>
            <div class="info_text_block">
                <p class="gigs_miks_text_normal">
                    {{ $about->text_down }}
                </p>

            </div>
        </section>
    </main>

@endsection
