@extends('layouts.app')

@section('title', 'About')

@section('content')
<section class="page-heading">
    <h1>A small system<br>with a <em>clear purpose.</em></h1>
    <p class="intro">Pointline is a simple point-of-sale foundation for keeping customer and staff information organized.</p>
</section>
<section class="about-panel">
    <span class="panel-index">01 — THE BASICS</span>
    <div><h2>Easy to navigate.<br>Easy to understand.</h2><p>Use the pages above to browse customer contact details and staff accounts. The sample lists are stored in the controllers for now, so the site can demonstrate its core pages without a database.</p></div>
</section>
@endsection
