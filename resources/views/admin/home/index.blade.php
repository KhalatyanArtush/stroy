@include('layouts.adminHeader')


<div class="container">
    @include('inc.admin.sidebar')
    <div class="main">
        <div class="main-top">
            <div class="toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            <h2>{{__('index.Home')}}</h2>
        </div>
        <div class="form-block">


            <div>
                <ul class="list-group list-group-horizontal">

                    <li class="list-group-item">{{__('index.title')}}1</li>
                    <li class="list-group-item">{{__('index.title_running')}}</li>
                    <li class="list-group-item">{{__('index.title')}}2</li>
                    <li class="list-group-item">{{__('index.title')}}3</li>
                    <li class="list-group-item">{{__('index.text')}}</li>
                    <li class="list-group-item">twitter</li>
                    <li class="list-group-item">facebook</li>
                    <li class="list-group-item">instagram</li>
                    <li class="list-group-item">telegram</li>
                    <li class="list-group-item">whatsapp</li>

                </ul>

                <div class="adminPosts">
                    @if(isset($home))
                        <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.home.show',$home->id) }}">{{__('index.Edit post')}}</a>
                        <ul class="list-group list-group-horizontal-sm">

                            <li class="list-group-item big-li">{{  $home->title1 }}</li>
                            <li class="list-group-item big-li">{{  $home->title_running }}</li>
                            <li class="list-group-item big-li">{{  $home->title2 }}</li>
                            <li class="list-group-item big-li">{{  $home->title3 }}</li>
                            <li class="list-group-item big-li">{{  $home->text}}</li>
                            <li class="list-group-item big-li">{{  $home->tel }}</li>
                            <li class="list-group-item big-li">{{  $home->twitter }}</li>
                            <li class="list-group-item big-li">{{  $home->facebook }}</li>
                            <li class="list-group-item big-li">{{  $home->instagram }}</li>
                            <li class="list-group-item big-li">{{  $home->telegram }}</li>
                            <li class="list-group-item big-li">{{  $home->whatsapp }}</li>
                            <li class="list-group-item big-li" style="display: flex; padding: 5px"><img
                                    style="width: 300px; height: 300px;"
                                    src="{{ asset('Home/images/'.$home->image_path1) }}">
                                <img style="width: 300px; height: 300px;"
                                     src="{{ asset('Home/images/'.$home->image_path2) }}">
                                <img style="width: 300px; height: 300px;"
                                     src="{{ asset('Home/images/'.$home->image_path3) }}">
                                <img style="width: 300px; height: 300px;"
                                     src="{{ asset('Home/images/'.$home->image_path_logo) }}">
                            </li>

                        </ul>
                    @else
                        <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.home.creat') }}">{{__('index.Add post')}}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.adminFooter')

