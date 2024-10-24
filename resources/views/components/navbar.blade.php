<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="{{ route('backend.Home') }}" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white">{{ $brand ?? "Tugas Study Club" }}</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <div class="nav-item dropdown">
                <a href="#" class="nav-item nav-link"><img src="/img/172554545850959702.png"alt="login" style="height: 24px"></a> 
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('backend.Login') }}" class="dropdown-item">Login</a>
                    <a href="{{ route('backend.Register') }}" class="dropdown-item">Register</a>
                </div>
            </div>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-app').submit();"class="nav-item nav-link">Logout</a>
            <a href="#" class="nav-item nav-link">About</a>
        </div>
    </div>
</nav>