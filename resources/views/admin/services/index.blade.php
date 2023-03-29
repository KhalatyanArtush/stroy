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
                        <h2>{{__('index.Services')}}</h2>

                    </div>

                </div>
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

