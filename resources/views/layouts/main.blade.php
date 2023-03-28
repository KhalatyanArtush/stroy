@include('layouts.header')
{{--@section('login')--}}
{{--            <div class="header login">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @guest--}}
{{--                        @if (Route::has('login'))--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>&nbsp;&nbsp;--}}
{{--                        @endif--}}

{{--                        @if (Route::has('register'))--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>&nbsp;&nbsp;--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                            <span id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }}--}}
{{--                            </span>&nbsp;&nbsp;--}}

{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}
{{--                    &nbsp;&nbsp;--}}
{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                    @endguest--}}

{{--            </div>--}}
{{--@endsection--}}

@yield('content')

@include('layouts.footer')






