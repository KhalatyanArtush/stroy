<div class="navigation">
    <ul>
        <li>
            <a href="#">
                <span class="icon"><i class="fa-solid fa-house"></i></span>
                <span class="title">Admin Panel</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.home.index') }}">
              <span class="icon"
              ><i class="fa-solid fa-bars"></i
                  ></span>
                <span class="title">{{__('index.Home')}}</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.services.index') }}">
              <span class="icon"
              ><i class="fa-solid fa-bars"></i
                  ></span>
                <span class="title">{{__('index.Services')}}</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.contact.index') }}">
              <span class="icon"
              ><i class="fa-solid fa-bars"></i
                  ></span>
                <span class="title">{{__('index.Contects')}}</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.about.index') }}">
              <span class="icon"
              ><i class="fa-solid fa-bars"></i
                  ></span>
                <span class="title">{{__('index.About us')}}</span>
            </a>
        </li>
    </ul>
</div>


