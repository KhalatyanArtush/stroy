@extends('layouts.main')

@section('content')
    <main>
        <section class="wrapper_blog_item">
            <div class="blog_item_title_block">
                <div>
                    <h1>{{ $service->title }}</h1>
                </div>
            </div>
        </section>
        <section class="wrapper_blog_item">
            <div class="blog_item_info_block">
                <div class="item_photo_block">
                    <img src="{{ asset('ServiceHome/images/'.$service->image_path) }}" alt="">
                </div>
                <div class="item_text_block">
                    <p>
                        {{ $service->text }}
                    </p>
                </div>
                <div class="item_btn_block">
                    <div class="item_btn_block_bottom">
                        <div class="item_share_block">
                            <a href="{{ $home->facebook }}" target="_blank">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.335 23.6842V12.8815H17.9596L18.5033 8.67027H14.335V5.982C14.335 4.76313 14.6721 3.93248 16.4219 3.93248L18.6501 3.93157V0.164878C18.2647 0.114804 16.942 0 15.4026 0C12.1879 0 9.98711 1.9622 9.98711 5.56492V8.67027H6.35156V12.8815H9.98711V23.6842H14.335Z"
                                        fill="#3e516b"/>
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
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.2327 0.605469H6.76726C3.03573 0.605469 0 3.48142 0 7.01656V17.8787C0 21.4137 3.03573 24.2896 6.76726 24.2896H18.2329C21.9642 24.2896 25 21.4137 25 17.8787V7.01656C25 3.48142 21.9642 0.605469 18.2327 0.605469V0.605469ZM23.5343 17.8787C23.5343 20.6481 21.1561 22.9012 18.2327 22.9012H6.76726C3.84387 22.9012 1.4656 20.6481 1.4656 17.8787V7.01656C1.4656 4.24703 3.84387 1.99394 6.76726 1.99394H18.2329C21.1561 1.99394 23.5343 4.24703 23.5343 7.01656V17.8787Z"
                                        fill="#3e516b"/>
                                    <path
                                        d="M12.4998 5.97168C8.7305 5.97168 5.66406 8.87673 5.66406 12.4476C5.66406 16.0185 8.7305 18.9236 12.4998 18.9236C16.2691 18.9236 19.3355 16.0185 19.3355 12.4476C19.3355 8.87673 16.2691 5.97168 12.4998 5.97168ZM12.4998 17.5351C9.53883 17.5351 7.12967 15.2529 7.12967 12.4476C7.12967 9.64252 9.53883 7.36015 12.4998 7.36015C15.4609 7.36015 17.8699 9.64252 17.8699 12.4476C17.8699 15.2529 15.4609 17.5351 12.4998 17.5351Z"
                                        fill="#3e516b"/>
                                    <path
                                        d="M19.4994 3.67188C18.3855 3.67188 17.4795 4.53036 17.4795 5.58544C17.4795 6.64071 18.3855 7.49919 19.4994 7.49919C20.6133 7.49919 21.5194 6.64071 21.5194 5.58544C21.5194 4.53018 20.6133 3.67188 19.4994 3.67188ZM19.4994 6.11055C19.1938 6.11055 18.9451 5.87492 18.9451 5.58544C18.9451 5.29579 19.1938 5.06034 19.4994 5.06034C19.8051 5.06034 20.0538 5.29579 20.0538 5.58544C20.0538 5.87492 19.8051 6.11055 19.4994 6.11055Z"
                                        fill="#3e516b"/>
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
                </div>
            </div>
        </section>
        <section class="wrapper">




            <div class="makeup_things_presentation">
                <div class="makeup_catalog_item_block">
                    @foreach($service->files as $file)

                    <div class="catalog_product_item_block">
                        <div class="catalog_product_item_block_img">
                            <img src="{{asset('Services/images/'.$file->name)}}" alt="">

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>












{{--            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@1.3.3/dist/css/splide.min.css">--}}

{{--            <div class="splide">--}}
{{--                <div class="splide__track">.--}}
{{--                    <ul class="splide__list slideshow" >--}}
{{--                        @foreach($service->files as $file)--}}
{{--                        <li class="splide__slide"><img class="img-slide"  src="{{asset('Services/images/'.$file->name)}}" alt=""></li>--}}
{{--                      @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@1.3.3/dist/js/splide.min.js"></script>--}}
{{--            <script>--}}
{{--                document.addEventListener( 'DOMContentLoaded', function () {--}}
{{--                    new Splide( '.splide' ).mount();--}}
{{--                } );--}}
{{--            </script>--}}
                <div class="blog_news_hov"></div>
                <div class="blog_news_text_block">
                    <div class="text_title_info_block">
                        <p>{{ $service->image_title }}</p>
                        <span>{{ $service->image_text }}</span>
                    </div>
                </div>
        </section>
    </main>

@endsection
