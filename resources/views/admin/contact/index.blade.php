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
                        <h2>{{__('index.Contects')}}</h2>

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
                        @if(isset($contact))

                            <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.contact.show',$contact->id) }}">{{__('index.Edit post')}}</a>

                            <ul class="list-group list-group-horizontal-sm">

                                <li class="list-group-item big-li">{{  $contact->tel }}</li>
                                <li class="list-group-item big-li">{{  $contact->email}}</li>
                                <li class="list-group-item big-li">{{  $contact->address}}</li>
                                <li class="list-group-item big-li">{{  $contact->city}}</li>
                                <li class="list-group-item big-li">{{  $contact->street}}</li>
                                <li class="list-group-item big-li">{{  $contact->number}}</li>

                            </ul>
                        @else
                            <a data-v-767ef7eb="" tabindex="0" href="{{ route('admin.contact.creat') }}">{{__('index.Add post')}}</a>

                        @endif

                    </div>


                </div>
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    <!-- /.control-sidebar -->
</div>

@include('layouts.adminFooter')

