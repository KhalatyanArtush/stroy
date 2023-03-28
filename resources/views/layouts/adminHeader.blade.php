<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="{{ asset('css/_global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/_global_media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index_media.css') }}">
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
                        <a href="{{ route('admin.home.index') }}">{{__('index.Home')}}</a>
                        <a href="{{ route('admin.services.index') }}">{{__('index.Services')}}</a>
                        <a href="{{ route('admin.about.index') }}">{{__('index.About us')}}</a>
                        <a href="{{ route('admin.services.index') }}">{{__('index.Services')}}</a>
                        <a href="{{ route('admin.contact.index') }}">{{__('index.Contects')}}</a>
                    </div>
                </div>
                <div class="burger_menu_right_section">
                        <span>
                            Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod.
                        </span>
                    <img src="img/jsing.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="menu_footer">
        <a href="" target="_blank">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.335 23.6842V12.8815H17.9596L18.5033 8.67027H14.335V5.982C14.335 4.76313 14.6721 3.93248 16.4219 3.93248L18.6501 3.93157V0.164878C18.2647 0.114804 16.942 0 15.4026 0C12.1879 0 9.98711 1.9622 9.98711 5.56492V8.67027H6.35156V12.8815H9.98711V23.6842H14.335Z" fill="white"/>
            </svg>
        </a>
        <a href="" target="_blank">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1331 6.6084C22.8773 5.65717 22.1273 4.90733 21.1762 4.65119C19.4387 4.17578 12.4884 4.17578 12.4884 4.17578C12.4884 4.17578 5.53844 4.17578 3.80091 4.63317C2.86811 4.88903 2.09984 5.65731 1.84397 6.6084C1.38672 8.3458 1.38672 11.9489 1.38672 11.9489C1.38672 11.9489 1.38672 15.5702 1.84397 17.2894C2.10011 18.2405 2.84982 18.9904 3.80105 19.2465C5.55673 19.7221 12.4887 19.7221 12.4887 19.7221C12.4887 19.7221 19.4387 19.7221 21.1762 19.2647C22.1274 19.0087 22.8773 18.2588 23.1334 17.3077C23.5905 15.5702 23.5905 11.9672 23.5905 11.9672C23.5905 11.9672 23.6088 8.3458 23.1331 6.6084ZM10.2756 15.2776V8.62023L16.0551 11.9489L10.2756 15.2776Z" fill="white"/>
            </svg>
        </a>
        <a href="" target="_blank">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.3424 5.12969C23.4617 5.51604 22.5232 5.77212 21.5447 5.89646C22.5513 5.29548 23.3196 4.35107 23.6807 3.21275C22.7422 3.77229 21.7061 4.16752 20.6018 4.38808C19.7107 3.43923 18.4406 2.85156 17.0551 2.85156C14.3669 2.85156 12.2028 5.03347 12.2028 7.70831C12.2028 8.09317 12.2353 8.46324 12.3153 8.81554C8.2786 8.61867 4.70672 6.68396 2.30722 3.73676C1.8883 4.46357 1.64258 5.29548 1.64258 6.19104C1.64258 7.87262 2.50853 9.36324 3.79932 10.2262C3.01922 10.2114 2.25393 9.98495 1.60557 9.62821C1.60557 9.64301 1.60557 9.66225 1.60557 9.6815C1.60557 12.041 3.28863 14.0009 5.4957 14.4524C5.10047 14.5604 4.66972 14.6123 4.22268 14.6123C3.91182 14.6123 3.59801 14.5945 3.30343 14.5294C3.93254 16.4522 5.71774 17.8659 7.84044 17.9118C6.18847 19.204 4.09093 19.9826 1.82021 19.9826C1.42202 19.9826 1.04011 19.9649 0.658203 19.916C2.80903 21.303 5.35804 22.095 8.10689 22.095C17.0418 22.095 21.9266 14.6937 21.9266 8.27821C21.9266 8.06357 21.9192 7.85633 21.9089 7.65058C22.8725 6.96669 23.6822 6.11258 24.3424 5.12969Z" fill="white"/>
            </svg>
        </a>
        <a href="" target="_blank">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.2327 0.605469H6.76726C3.03573 0.605469 0 3.48142 0 7.01656V17.8787C0 21.4137 3.03573 24.2896 6.76726 24.2896H18.2329C21.9642 24.2896 25 21.4137 25 17.8787V7.01656C25 3.48142 21.9642 0.605469 18.2327 0.605469V0.605469ZM23.5343 17.8787C23.5343 20.6481 21.1561 22.9012 18.2327 22.9012H6.76726C3.84387 22.9012 1.4656 20.6481 1.4656 17.8787V7.01656C1.4656 4.24703 3.84387 1.99394 6.76726 1.99394H18.2329C21.1561 1.99394 23.5343 4.24703 23.5343 7.01656V17.8787Z" fill="white"/>
                <path d="M12.4998 5.97168C8.7305 5.97168 5.66406 8.87673 5.66406 12.4476C5.66406 16.0185 8.7305 18.9236 12.4998 18.9236C16.2691 18.9236 19.3355 16.0185 19.3355 12.4476C19.3355 8.87673 16.2691 5.97168 12.4998 5.97168ZM12.4998 17.5351C9.53883 17.5351 7.12967 15.2529 7.12967 12.4476C7.12967 9.64252 9.53883 7.36015 12.4998 7.36015C15.4609 7.36015 17.8699 9.64252 17.8699 12.4476C17.8699 15.2529 15.4609 17.5351 12.4998 17.5351Z" fill="white"/>
                <path d="M19.4994 3.67188C18.3855 3.67188 17.4795 4.53036 17.4795 5.58544C17.4795 6.64071 18.3855 7.49919 19.4994 7.49919C20.6133 7.49919 21.5194 6.64071 21.5194 5.58544C21.5194 4.53018 20.6133 3.67188 19.4994 3.67188ZM19.4994 6.11055C19.1938 6.11055 18.9451 5.87492 18.9451 5.58544C18.9451 5.29579 19.1938 5.06034 19.4994 5.06034C19.8051 5.06034 20.0538 5.29579 20.0538 5.58544C20.0538 5.87492 19.8051 6.11055 19.4994 6.11055Z" fill="white"/>
            </svg>
        </a>
        <a href="" target="_blank">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.6414 11.4342C20.378 11.4342 20.1194 11.4629 19.8697 11.5152C19.5372 8.15101 16.6901 5.51318 13.2401 5.51318C12.8316 5.51318 12.5 5.84476 12.5 6.25332V18.0954C12.5 18.504 12.8316 18.8356 13.2401 18.8356H20.6414C22.6832 18.8356 24.3421 17.1767 24.3421 15.1349C24.3421 13.0951 22.6832 11.4342 20.6414 11.4342Z" fill="white"/>
                <path d="M9.54004 7.73378V18.0956C9.54004 18.5042 9.87162 18.8358 10.2802 18.8358C10.6887 18.8358 11.0203 18.5042 11.0203 18.0956V7.73378C11.0203 7.32523 10.6887 6.99365 10.2802 6.99365C9.87162 6.99365 9.54004 7.32523 9.54004 7.73378Z" fill="white"/>
                <path d="M6.5791 10.6942V18.0955C6.5791 18.5041 6.91068 18.8357 7.31923 18.8357C7.72779 18.8357 8.05936 18.5041 8.05936 18.0955V10.6942C8.05936 10.2857 7.72779 9.9541 7.31923 9.9541C6.91068 9.9541 6.5791 10.2857 6.5791 10.6942Z" fill="white"/>
                <path d="M3.61914 18.0955C3.61914 18.5041 3.95072 18.8357 4.35927 18.8357C4.76782 18.8357 5.0994 18.5041 5.0994 18.0955V10.6942C5.0994 10.2857 4.76782 9.9541 4.35927 9.9541C3.95072 9.9541 3.61914 10.2857 3.61914 10.6942V18.0955Z" fill="white"/>
            </svg>
        </a>
    </div>
</div>
<header id="header">
    <section class="wrapper">
        <div class="menu_leng_burger_block">
            <div class="burger_block">
            </div>

            <div class="nav_bar_block">
                <a href="{{ route('admin.home.index') }}">{{__('index.Home')}}</a>
                <a href="{{ route('admin.services.index') }}">{{__('index.Services')}}</a>
                <a href="{{ route('admin.about.index') }}">{{__('index.About us')}}</a>
                <a href="{{ route('admin.services.index') }}">{{__('index.Services')}}</a>
                <a href="{{ route('admin.contact.index') }}">{{__('index.Contects')}}</a>

            </div>

        </div>
    </section>
</header>
