@include('layouts.adminHeader')

<div class="wrapper" style="margin-top: 100px; background-color: #c3aaaa;">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary " style="z-index: 0;">
        <!-- Brand Logo -->
        <span class="brand-link font-weight-light">Admin Panel</span>

        <!-- Sidebar -->
    @include('inc.admin.sidebar')
    <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content" style="margin-top: 100px">
            <div class="container-fluid">
                <div class="container" style="column-count: 2;">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>{{__('index.About us')}}</h2>

                    </div>

                </div>
                <div>
                    <ul class="list-group list-group-horizontal">

                        <li class="list-group-item">{{__('index.title')}}</li>
                        <li class="list-group-item">{{__('index.text')}}</li>
                        <li class="list-group-item">{{__('index.text_down')}}</li>
                        <li class="list-group-item">{{__('index.img')}}</li>

                    </ul>

                    <div class="adminPosts">
                        @if(isset($about))

                            <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.about.show',$about->id) }}">{{__('index.Edit post')}}</a>

                            <ul class="list-group list-group-horizontal-sm">

                                <li class="list-group-item big-li">{{  $about->title }}</li>
                                <li class="list-group-item big-li">{{  $about->text}}</li>
                                <li class="list-group-item big-li">{{  $about->text_down}}</li>
                                <li class="list-group-item big-li">   <img style="width: 300px; height: 300px;" src="{{ asset('About/images/'.$about->image_path) }}">
                                  </li>

                            </ul>
                        @else
                            <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.about.creat') }}">{{__('index.Add post')}}</a>

                        @endif

                    </div>


                </div>
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>

@include('layouts.adminFooter')

