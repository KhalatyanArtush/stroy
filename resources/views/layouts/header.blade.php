<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Home page</title>
    <link rel="stylesheet" href="{{ asset('css/_global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/_global_media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact_plus_media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index_media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog_item_plus_media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slide.css') }}">
</head>
<body id="body">
<div class="menu_burger" id="menu_burger">
    <div class="burger_open_bg_block">
        <div class="wrapper">
            <div class="burger_menu_left_right_section">
                <div class="burger_menu_left_section">
                    <div class="menu_close_burg_block">
                            <span class="menu_close" onclick="menuClose()">
                                <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="1.35355" y1="0.646447" x2="31.3536" y2="30.6464" stroke="white"/>
                                    <line x1="0.646447" y1="30.6464" x2="30.6464" y2="0.646447" stroke="white"/>
                                </svg>
                            </span>
                    </div>
                    <div class="menu_navbar_burger">
                        <a href="{{ route('index') }}" class="nav_bar_block">{{__('index.Home')}}</a>
                        <a href="{{ route('about') }}">{{__('index.About us')}}</a>
                        <div class="dropdown">
                            <a>{{__('index.Services')}}</a>
                            <div class="dropdown-content">
                                @foreach($services as $service)
                                    <a href="#">{{ $service->header_title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <a href="{{ route('contacts') }}">{{__('index.Contects')}}</a>
                    </div>
                </div>
                <div class="burger_menu_right_section">
{{--                    <img src="img/jsing.png" alt="">--}}
                </div>
            </div>
        </div>
    </div>
    <div class="menu_footer">
        <a href="{{ $home->facebook }}" target="_blank">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.335 23.6842V12.8815H17.9596L18.5033 8.67027H14.335V5.982C14.335 4.76313 14.6721 3.93248 16.4219 3.93248L18.6501 3.93157V0.164878C18.2647 0.114804 16.942 0 15.4026 0C12.1879 0 9.98711 1.9622 9.98711 5.56492V8.67027H6.35156V12.8815H9.98711V23.6842H14.335Z"
                    fill="white"/>
            </svg>
        </a>
        <a href="{{ $home->whatsapp }}" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor"
                 viewBox="0 0 16 16">
                <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>
        </a>
        <a href="{{ $home->instagram }}" target="_blank">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.2327 0.605469H6.76726C3.03573 0.605469 0 3.48142 0 7.01656V17.8787C0 21.4137 3.03573 24.2896 6.76726 24.2896H18.2329C21.9642 24.2896 25 21.4137 25 17.8787V7.01656C25 3.48142 21.9642 0.605469 18.2327 0.605469V0.605469ZM23.5343 17.8787C23.5343 20.6481 21.1561 22.9012 18.2327 22.9012H6.76726C3.84387 22.9012 1.4656 20.6481 1.4656 17.8787V7.01656C1.4656 4.24703 3.84387 1.99394 6.76726 1.99394H18.2329C21.1561 1.99394 23.5343 4.24703 23.5343 7.01656V17.8787Z"
                    fill="white"/>
                <path
                    d="M12.4998 5.97168C8.7305 5.97168 5.66406 8.87673 5.66406 12.4476C5.66406 16.0185 8.7305 18.9236 12.4998 18.9236C16.2691 18.9236 19.3355 16.0185 19.3355 12.4476C19.3355 8.87673 16.2691 5.97168 12.4998 5.97168ZM12.4998 17.5351C9.53883 17.5351 7.12967 15.2529 7.12967 12.4476C7.12967 9.64252 9.53883 7.36015 12.4998 7.36015C15.4609 7.36015 17.8699 9.64252 17.8699 12.4476C17.8699 15.2529 15.4609 17.5351 12.4998 17.5351Z"
                    fill="white"/>
                <path
                    d="M19.4994 3.67188C18.3855 3.67188 17.4795 4.53036 17.4795 5.58544C17.4795 6.64071 18.3855 7.49919 19.4994 7.49919C20.6133 7.49919 21.5194 6.64071 21.5194 5.58544C21.5194 4.53018 20.6133 3.67188 19.4994 3.67188ZM19.4994 6.11055C19.1938 6.11055 18.9451 5.87492 18.9451 5.58544C18.9451 5.29579 19.1938 5.06034 19.4994 5.06034C19.8051 5.06034 20.0538 5.29579 20.0538 5.58544C20.0538 5.87492 19.8051 6.11055 19.4994 6.11055Z"
                    fill="white"/>
            </svg>
        </a>
        <a href="{{ $home->telegram }}" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                 viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
            </svg>
        </a>
    </div>
</div>
<header id="header">
    <section class="wrapper">
        <div class="menu_leng_burger_block">
            <div class="burger_block">
                    <span onclick="menuOpen()">
                        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 6.40625V8.96875H41V6.40625H0ZM0 21.7813H34.5V19.2188H0V21.7813ZM0 34.5938H21V32.0313H0V34.5938Z" fill="white"/>
                            </svg>
                    </span>
            </div>
            <div class="menu_name">
                <a href="{{ route('index') }}">
                    <img src="{{asset('img/logo4.jpg')}}" alt="">
                </a>
            </div>
            <div class="nav_bar_block">
                <a href="{{ route('index') }}" class="nav_bar_block">{{__('index.Home')}}</a>
                <a href="{{ route('about') }}">{{__('index.About us')}}</a>
                <div class="dropdown">
                    <a>{{__('index.Services')}}</a>
                    <div class="dropdown-content">
                        @foreach($services as $service)
                            <a href="{{ route('singleServices', $service->id) }}">{{ $service->header_title }}</a>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('contacts') }}">{{__('index.Contects')}}</a>
            </div>
            <div class="lang_block">
                <a href="tel:+37493939393" class="header_call_block_link">
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.0849 1H7.91822C7.74343 1 7.60156 1.14934 7.60156 1.33332C7.60156 1.5173 7.74343 1.66664 7.91822 1.66664H11.0849C11.2597 1.66664 11.4015 1.5173 11.4015 1.33332C11.4015 1.14934 11.2597 1 11.0849 1Z" fill="white"/>
                        <path d="M13.3013 1H12.9846C12.8098 1 12.668 1.14934 12.668 1.33332C12.668 1.5173 12.8098 1.66664 12.9846 1.66664H13.3013C13.4761 1.66664 13.6179 1.5173 13.6179 1.33332C13.6179 1.14934 13.4761 1 13.3013 1Z" fill="white"/>
                        <path d="M9.89431 17H9.10804C8.6264 17 8.23438 17.4127 8.23438 17.9196V18.0807C8.23438 18.5877 8.6264 19 9.10774 19H9.89402C10.3757 19 10.7677 18.5877 10.7677 18.0807V17.9196C10.7677 17.4127 10.3757 17 9.89431 17ZM10.1344 18.0807C10.1344 18.22 10.0267 18.3333 9.89435 18.3333H9.10804C8.97537 18.3333 8.86768 18.22 8.86768 18.0807V17.9196C8.86768 17.78 8.97534 17.6666 9.10804 17.6666H9.89402C10.0267 17.6666 10.1344 17.78 10.1344 17.9196V18.0807Z" fill="white"/>
                        <path d="M13.7394 0H5.26194C4.63082 0 4.11719 0.540664 4.11719 1.205V18.795C4.11719 19.4593 4.63082 20 5.26194 20H13.7391C14.3702 20 14.8838 19.4593 14.8838 18.7954V1.205C14.8839 0.540664 14.3702 0 13.7394 0ZM14.2505 18.795C14.2505 19.0917 14.0213 19.3333 13.7394 19.3333H5.26194C4.9798 19.3333 4.75053 19.0916 4.75053 18.7953V1.205C4.75053 0.90832 4.9798 0.66668 5.26194 0.66668H13.7391C14.0212 0.66668 14.2505 0.908359 14.2505 1.205V18.795H14.2505Z" fill="white"/>
                        <path d="M14.5672 2H4.43384C4.25906 2 4.11719 2.14934 4.11719 2.33332V16.3333C4.11719 16.5173 4.25906 16.6666 4.43384 16.6666H14.5672C14.742 16.6666 14.8838 16.5173 14.8838 16.3333V2.33332C14.8838 2.14934 14.742 2 14.5672 2ZM14.2505 16H4.7505V2.66668H14.2505V16Z" fill="white"/>
                    </svg>
                    <span>{{__('index.Tel')}} {{ $home->tel }}</span>
                </a>
                {{--                <span class="lang_block_active">Call Us +37493939393</span>--}}
            </div>
        </div>
    </section>
</header>
