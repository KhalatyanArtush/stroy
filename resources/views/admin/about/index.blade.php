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


            <div class="list-group">
                <div class="admin-list-group">
                    @if(isset($about))
                        <div class="admin-result">
                            <p>{{__('index.title')}}</p>
                            <p>{{  $about->title }}</p>

                        </div>
                        <div class="admin-result">
                            <p>{{__('index.text')}}</p>
                            <p>{{  $about->text }}</p>

                        </div>
                        <div class="admin-result">
                            <p>{{__('index.text_down')}}</p>
                            <p>{{  $about->text_down }}</p>

                        </div>

                        <div class="button-container">
                            <button class="btn"><a data-v-767ef7eb="" tabindex="0"
                                                   href="{{ route('admin.about.show',$about->id) }}">{{__('index.Edit post')}}</a>
                            </button>
                        </div>
                    @else
                        <div class="button-container">
                            <button class="btn"><a data-v-767ef7eb="" tabindex="0"
                                                   href="{{ route('admin.about.creat') }}">{{__('index.Add post')}}</a>
                            </button>
                        </div>
                    @endif
                    @if(isset($about))
                        <img style="width: 200px; height: 200px;" src="{{ asset('About/images/'.$about->image_path) }}">
                    @endif

                </div>
            </div>
        </div>

@include('layouts.adminFooter')

