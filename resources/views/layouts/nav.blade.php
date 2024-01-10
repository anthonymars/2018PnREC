<nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logos/cpdLogo-fff.png') }}" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><strong>Explore</strong></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/cato"><strong>Cato</strong></a>
                        <a class="dropdown-item" href="/kanawha-city"><strong>Kanawha City</strong></a>
                        <a class="dropdown-item" href="/mlk-jr"><strong>Martin Luther King Jr.</strong></a>
                        <a class="dropdown-item" href="/north-charleston"><strong>North Charleston</strong></a>
                        <a class="dropdown-item" href="/roosevelt"><strong>Roosevelt</strong></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/galleries"><strong>Gallery</strong></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><strong>Things To Do</strong></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/events"><strong>Our Events</strong></a>
                        <a class="dropdown-item" href="/weekly-fun"><strong>Weekly Activities</strong></a>
                    </div>
                </li>
                <a id="nav-link" class="nav-item nav-link" href="/blogs"><strong>Our Stories</strong></a>
                <a id="nav-link" class="nav-item nav-link" href="/get-in-touch"><strong>Get In Touch</strong></a>
                <!-- Authentication Links -->
            @guest
            <!--
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                -->
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                           <!-- @if(Auth::user()->hasRole('SuperFly')) -->
                                <a href="/admin/users" class="dropdown-item">All Users</a>
                                <a href="/admin/roles" class="dropdown-item">All Roles</a>
                                <a class="dropdown-item" href="/admin/roles/create">Create A New Role</a>
                                <div class="dropdown-divider"></div>
                         <!--   @endif 
                            @if(Auth::user()->hasRole('YoungFly')) -->
                                <a class="dropdown-item" href="/blogs/create">Add A New Blog</a>
                                <a class="dropdown-item" href="/events/create">Add A New Event</a>
                                <a class="dropdown-item" href="/gallery/create">Add A New Gallery</a>

                          <!--   @endif -->

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>
