<style>
    /* Navbar styling */
    .navbar-custom {
        background: linear-gradient(135deg, #1d1d1d, #333333); /* Dark gradient background */
        padding: 1rem;
        color: #f8f9fa;
    }
    
    .navbar-custom .navbar-brand {
        font-size: 1.75rem;
        font-weight: bold;
        color: #ffdd57; /* Gold for standout effect */
        text-transform: uppercase;
    }
    
    .navbar-custom .navbar-nav .nav-link {
        color: #f8f9fa;
        font-size: 1.1rem;
        margin-right: 15px;
        font-weight: 500;
        transition: color 0.3s, transform 0.3s;
    }
    
    /* Hover effects */
    .navbar-custom .navbar-nav .nav-link:hover {
        color: #ffdd57; /* Gold hover color */
        transform: scale(1.1);
    }
    
    /* Active link */
    .navbar-custom .navbar-nav .nav-link.active {
        color: #17a2b8; /* Light blue for active links */
        font-weight: bold;
    }
    
    /* Authenticated user section */
    .navbar-custom .navbar-text {
        color: #f8f9fa;
        font-weight: bold;
    }

    /* Special button styling for login/register */
    .navbar-custom .btn-auth {
        background-color: #17a2b8; /* Light blue background */
        color: #fff;
        font-weight: bold;
        margin-left: 10px;
        border-radius: 5px;
        padding: 5px 10px;
        transition: background-color 0.3s;
    }
    
    .navbar-custom .btn-auth:hover {
        background-color: #138496; /* Darker blue on hover */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="btn btn-auth" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-auth" href="{{ route('registration') }}">Register</a>
                </li>
                @endauth
            </ul>
            
            <span class="navbar-text">
                @auth
                {{ auth()->user()->name }}
                @endauth
            </span>
        </div>
    </div>
</nav>
