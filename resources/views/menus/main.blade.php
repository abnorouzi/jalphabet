

<ul class="navbar-nav ml-auto" id="menu-rtl">

    @foreach($items as $menu_item)
        @php
            $submenu = $menu_item->children;
        @endphp
        @if(count($submenu) >= 1)
            <li class="dropdown nav-item">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
                <div class="dropdown-menu" style="background-color: #c9c9c9;font-size: large;">

                        @if (Route::has('login'))
                          @auth
                              <a class="dropdown-item nav-link text-center text-danger" href="{{url('logout')}}">خروج</a>
                          @else
                               <a class="dropdown-item nav-link text-center text-danger" href="{{ route('login') }}">ورود</a>

                            @if (Route::has('register'))
                               <a class="dropdown-item nav-link text-center text-danger" href="{{ route('register') }}">ثبت نام</a>
                            @endif
                        @endauth
                        @endif
                </div>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
            </li>
        @endif
    @endforeach
</ul>