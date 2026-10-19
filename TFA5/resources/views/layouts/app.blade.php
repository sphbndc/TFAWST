<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f3f0e9">
    <title>@yield('title') — Pointline POS</title>
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
    <header class="topbar">
        <a class="brand" href="{{ route('home') }}"><span class="brand-mark">P</span><span>POINTLINE <small>POINT OF SALE</small></span></a>
        <nav aria-label="Main navigation">
            <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            <a class="{{ request()->routeIs('customers') ? 'active' : '' }}" href="{{ route('customers') }}">Customers</a>
            <a class="{{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}">Users</a>
        </nav>
    </header>
    <main>@yield('content')</main>
    <footer><span>POINTLINE POS</span><span>Customer and staff directory</span></footer>
</body>
</html>
