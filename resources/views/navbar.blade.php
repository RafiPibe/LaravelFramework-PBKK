@php
    use Illuminate\Support\Facades\Auth;
@endphp

{{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

<style>
    header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    header nav ul {
        list-style: none;
    }

    header nav ul li {
        display: inline;
        margin-right: 20px;
    }

    header nav ul li a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }

    header nav ul li button {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }

    .bg-black {
    background-color: #1a1a1a;
    }

    .bg-hollow {
        background-color: #141516;
    }
</style>

<div>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Men's Shoes</a></li>
                <li><a href="#">Women's Shoes</a></li>
                {{-- <li><a href="/login">Login</a></li> --}}
                @auth
                    <li><a>{{ Auth::user()->name }}</a></li>
                    <form action="/logout" method="post">
                        @csrf
                        <button typle="submit" class="btn btn-link">Logout</button>
                    </form>
                    @else
                        <a href="/login"><i class="bi bi-box-arrow-in-right"></i> Log in</a>
                @endauth
            </ul>
        </nav>
    </header>
</div>
