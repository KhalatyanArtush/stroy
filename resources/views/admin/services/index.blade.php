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
        <div class="form-block">


            <div>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">{{__('index.header title')}}</li>
                    <li class="list-group-item">{{__('index.title')}}</li>
                    <li class="list-group-item">{{__('index.text')}}</li>
                    <li class="list-group-item">{{__('index.image title')}}</li>
                    <li class="list-group-item">{{__('index.image text')}}</li>
                    <li class="list-group-item">{{__('index.img')}}</li>
                </ul>

                <div class="adminPosts">
                    @foreach($services as $service)
                        <a data-v-767ef7eb="" tabindex="0"
                           href="{{ route('admin.service.show',$service->id) }}">{{__('index.Edit post')}}</a>
                        <ul class="list-group list-group-horizontal-sm">

                            <li class="list-group-item big-li">{{  $service->header_title }}</li>
                            <li class="list-group-item big-li">{{  $service->title }}</li>
                            <li class="list-group-item big-li">{{  $service->text }}</li>
                            <li class="list-group-item big-li">{{  $service->image_title }}</li>
                            <li class="list-group-item big-li">{{  $service->image_text}}</li>

                        </ul>

                    @endforeach
                    <a data-v-767ef7eb="" tabindex="0"
                       href="{{ route('admin.service.creat') }}">{{__('index.Add post')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.adminFooter')

