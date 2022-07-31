<div id="header">
    <div id="header-content">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <a class="navbar-brand " href="{{ url('/') }}">
                        <img src="{{ asset('assets/img/braingame.png') }}" alt="logo" />
            </a>
            <p class="headerFooter">BRAIN GAMES
            </p>

            <a class="navbar-brand" href="{{ url('/') }}">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto navHeader" style="margin-right: 100px" >
                    <!-- Authentication Links -->

                    @if (!Auth::check())
                        <li class="nav-item">
                            <a  style="color: #302b63" class="nav-link" href="login">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (!Auth::check())
                        <li class="nav-item">
                            <a  style="color: #302b63" class="nav-link" href="register">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @if (Auth::check())
                        <li class="nav-item">
                            <a style="color: #302b63" class="nav-link" href="logout">{{ __('Log Out') }}</a>
                        </li>
                    @endif

                </ul></div>

        </nav>
    </div>
</div>
