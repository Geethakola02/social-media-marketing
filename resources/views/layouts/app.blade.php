<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Organic Marketing')</title>

    {{-- Load page-specific CSS --}}
    @if (Request::is('/'))
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @elseif (Request::is('contact'))
        <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    @elseif (Request::is('services'))
        <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"> {{-- fallback --}}
    @endif
</head>

<body class="{{ Request::is('/') ? 'home-page' : (Request::is('contact') ? 'contact-page' : (Request::is('services') ? 'services-page' : '')) }}">
    <header>
        <h1>Social Media Marketing</h1>
        <nav>
            <a href="{{ url('/') }}">Home</a> |
            <a href="{{ url('/services') }}">Services</a> |
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Social Media Marketing</p>
    </footer>
</body>
</html>
