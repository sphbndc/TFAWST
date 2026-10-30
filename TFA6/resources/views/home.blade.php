@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="hero-copy">
        <h1>Good service<br>starts with<br><em>good records.</em></h1>
        <p class="intro">Pointline keeps customer and team details easy to find, all in one simple point-of-sale directory.</p>
        <div class="hero-actions"><a class="button" href="{{ route('customers') }}">View customers</a><a class="text-link" href="{{ route('about') }}">Get to know Pointline</a></div>
    </div>
    <div class="hero-art" aria-label="Pointline directory summary">
        <div class="art-top"><span>STORE DIRECTORY</span><span>01 / 04</span></div>
        <div class="art-rule"></div>
        <div class="art-numbers"><strong>10</strong><span>sample<br>records</span></div>
        <div class="art-bottom"><span>05 CUSTOMER ACCOUNTS</span><span>05 STAFF ACCOUNTS</span></div>
    </div>
</section>
<section class="home-links" aria-label="Directory pages">
    <a href="{{ route('customers') }}"><span class="link-number">01</span><span><strong>Customer accounts</strong><small>Contact details for your customers</small></span></a>
    <a href="{{ route('users') }}"><span class="link-number">02</span><span><strong>User accounts</strong><small>Meet the people behind the counter</small></span></a>
</section>
@endsection
