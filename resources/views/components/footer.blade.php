<div class="container-fluid bg-black">
    <footer class="py-3 mx-5" data-bs-theme="dark">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/dashboard?username={{ $slot }}" class="nav-link px-2 text-body-secondary">Dashboard</a></li>
            <li class="nav-item"><a href="/pengelolaan?username={{ $slot }}" class="nav-link px-2 text-body-secondary">Pengelolaan</a></li>
            <li class="nav-item"><a href="/profile?username={{ $slot }}" class="nav-link px-2 text-body-secondary">Profile</a></li>
        </ul>
        <p class="text-center text-body-secondary">&copy; 2025 Moview, Inc</p>
    </footer>
</div>
