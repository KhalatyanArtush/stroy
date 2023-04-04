@include('layouts.adminHeader')


<div class="container">
    @include('inc.admin.sidebar')
    <div class="main">
        <div class="main-top">
            <div class="toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            <h2>{{__('index.About us')}}</h2>
        </div>
        <div class="form-block">


            <div>
                <ul class="list-group list-group-horizontal">

                    <li class="list-group-item">{{__('index.title')}}</li>
                    <li class="list-group-item">{{__('index.text')}}</li>
                    <li class="list-group-item">{{__('index.text_down')}}</li>
                    <li class="list-group-item">{{__('index.img')}}</li>

                </ul>

                <div class="adminPosts">
                    @if(isset($about))
                        <div class="button-container">
                            <button class="btn"> <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.about.show',$about->id) }}">{{__('index.Edit post')}}</a></button>
                        </div>

                        <ul class="list-group list-group-horizontal-sm">

                            <li class="list-group-item big-li">{{  $about->title }}</li>
                            <li class="list-group-item big-li">{{  $about->text}}</li>
                            <li class="list-group-item big-li">{{  $about->text_down}}</li>
                            <li class="list-group-item big-li">   <img style="width: 200px; height: 200px;" src="{{ asset('About/images/'.$about->image_path) }}">
                            </li>

                        </ul>
                    @else
                        <div class="button-container">
                            <button class="btn"> <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.about.creat') }}">{{__('index.Add post')}}</a></button>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.adminFooter')

