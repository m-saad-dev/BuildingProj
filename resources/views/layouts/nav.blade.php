<div class="container">
    <a class="navbar-brand" style="float:right" href="index.html"><i class="fa fa-paper-plane"></i> عقارات</a>
    <div class="menu pull-left"> <a class="toggleMenu" href="#"><img src="{{asset('public/images/nav_icon.png')}}" alt="" /> </a>
          <ul class="nav" id="nav">
                 @guest
                    @if (Route::currentRouteName()!='login')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('الدخول') }}</a>
                        </li>
                    @endif
                     @if (Route::currentRouteName()!='register')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('عضوية جديدة') }}</a>
                            </li>
                     @endif

                @else
                    <li class="current"><a href="{{route('home')}}">الرئيسية</a></li> <li><a href="about.html">حولنا</a></li> <li><a href="services.html">الخدمات</a></li> <li><a href="contact.html">تواصل معنا</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('الخروج') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            <div class="clear"></div>
          </ul>
    </div>
</div>