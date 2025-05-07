<nav class="navbar navbar-expand-md sticky-top bg-black py-3" data-bs-theme="dark">
    <div class="container-fluid mx-4">
        <img src="{{ asset('movie.png') }}" alt="Logo" width="50" class="me-4">
        <a class="navbar-brand text-white" href="/dashboard?username={{ request('username') }}">Moview</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link {{ $active == "dashboard" ? "active" : ""}}" aria-current="page" variant="dark"
                    href="/dashboard?username={{ $slot }}">Dashboard</a>
                <a class="nav-link {{ $active == "pengelolaan" ? "active" : ""}}" href="/pengelolaan?username={{ $slot }}">Pengelolaan</a>
                <a class="nav-link {{ $active == "profile" ? "active" : ""}}" href="/profile?username={{ $slot }}">Profile</a>
            </div>
        </div>
    </div>
</nav>
