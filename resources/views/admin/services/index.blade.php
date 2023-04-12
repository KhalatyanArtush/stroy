@include('layouts.adminHeader')


<div class="container">
    @include('inc.admin.sidebar')
    <div class="main">


        <div class="main-top">
            <div class="toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            <h2>{{__('index.Services')}}</h2>
        </div>

        <div class="main-bottom">
            <div class="main-bottom-text title">
                <div class="admin_text">{{__('index.header title')}}</div>
                <div class="admin_text">{{__('index.title')}}</div>
                <div class="admin_text">{{__('index.text')}}</div>
                <div class="admin_text">{{__('index.image title')}}</div>
                <div class="admin_text">{{__('index.image text')}}</div>
            </div>
            <div class="main-bottom-text">
                @foreach($services as $service)
                    <div class="admin_text">{{  $service->header_title }}</div>
                    <div class="admin_text">{{  $service->title }}</div>
                    <div class="admin_text">{{  $service->text }}</div>
                    <div class="admin_text">{{  $service->image_title }}</div>
                    <div class="admin_text">{{  $service->image_text }}</div>


                    <button class="mail-button" >
                    <a data-v-767ef7eb="" tabindex="0"
                       href="{{ route('admin.service.show',$service->id) }}">{{__('index.Edit post')}}</a>
                    </button>
                @endforeach

            </div>
            <button class="mail-button" >
                <a data-v-767ef7eb="" tabindex="0"
                   href="{{ route('admin.service.creat') }}">{{__('index.Add post')}}</a>
            </button>
        </div>
    </div>
</div>

@include('layouts.adminFooter')

