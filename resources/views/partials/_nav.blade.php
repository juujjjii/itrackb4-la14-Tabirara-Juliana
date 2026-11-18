
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNav"
                aria-controls="mainNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">

            <div class="navbar-nav me-auto">
                <a class="nav-link" href="{{ route('home') }}">
                    Home
                </a>

                <a class="nav-link" href="{{ route('subjects.index') }}">
                    All Subjects
                </a>
            </div>

            <div class="navbar-nav align-items-lg-center">

                @guest
                    <a class="nav-link" href="{{ route('login') }}">
                        Log in
                    </a>

                    <a class="nav-link" href="{{ route('register') }}">
                        Register
                    </a>
                @endguest

                @auth
                    <span class="nav-link text-white">
                        {{ Auth::user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-danger btn-sm">
                            Log out
                        </button>
                    </form>
                @endauth

            </div>
        </div>
    </div>
</nav>
