<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


        <li class="nav-item">
            <a href="{{ route('admin.home.index') }}" class="nav-link ">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Home')}}
{{--                    <span class="badge badge-info right">{{ count($homes ) }}</span>--}}
                </p>

            </a>
        </li>
        <li class="nav-item">

            <a href="{{ route('admin.posts.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    {{__('sidebar.Posts')}}
{{--                    <span class="badge badge-info right">{{ count($posts ) }}</span>--}}
                </p>

            </a>

        </li>

        <li class="nav-item">

            <a href="{{ route('admin.services.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p id="buildingTypes">
                    {{__('sidebar.Servises')}}
{{--                    <span class="badge badge-info right">{{ count($ourServises )}}</span>--}}
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.contact.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p id="buildingTypes">
                    {{__('sidebar.Contacts')}}
                </p>

            </a>

        </li>
        <li class="nav-item">

            <a href="{{ route('admin.about.index') }}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p id="buildingTypes">
                    {{__('sidebar.Abouts')}}
                </p>

            </a>

        </li>

    </ul>
</nav>
