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

            <div class="list-group">
                <div class="admin-list-group">
                    @if(isset($home))
                        <div class="admin-result">
                            <p>{{__('index.title')}}</p>
                            <p>{{  $home->title }}</p>

                        </div>
                        <div class="admin-result">
                            <p>{{__('index.title_running')}}</p>
                            <p>{{  $home->text }}</p>

                        </div>
                        <div class="admin-result">
                            <p>{{__('index.title')}}2</p>
                            <p>{{  $home->text_down }}</p>

                        </div>
                        <div class="admin-result">
                            <p>{{__('index.text')}}</p>
                            <p>{{  $home->title }}</p>

                        </div>
                        <div class="admin-result">
                            <p>facebook</p>
                            <p>{{  $home->facebook }}</p>

                        </div>
                        <div class="admin-result">
                            <p>instagram</p>
                            <p>{{  $home->instagram }}</p>

                        </div>
                        <div class="admin-result">
                            <p>telegram</p>
                            <p>{{  $home->telegram }}</p>

                        </div>
                        <div class="admin-result">
                            <p>whatsapp</p>
                            <p>{{  $home->whatsapp }}</p>

                        </div>

                        <div class="button-container">
                            <button class="btn"><a data-v-767ef7eb="" tabindex="0"
                                                   href="{{ route('admin.home.show',$home->id) }}">{{__('index.Edit post')}}</a>
                            </button>
                        </div>
                    @else
                        <div class="button-container">
                            <button class="btn"><a data-v-767ef7eb="" tabindex="0"
                                                   href="{{ route('admin.home.creat') }}">{{__('index.Add post')}}</a>
                            </button>
                        </div>
                    @endif
                    @if(isset($home))
                        <img style="width: 200px; height: 200px;" src="{{ asset('Home/images/'.$home->image_path1) }}">
                        <img style="width: 200px; height: 200px;" src="{{ asset('Home/images/'.$home->image_path2) }}">
                        <img style="width: 200px; height: 200px;" src="{{ asset('Home/images/'.$home->image_path3) }}">
                        <img style="width: 200px; height: 200px;"
                             src="{{ asset('Home/images/'.$home->image_path_logo) }}">
                    @endif

                </div>
            </div>
        </div>
    </div>
@include('layouts.adminFooter')

