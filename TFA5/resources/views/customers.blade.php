@extends('layouts.app')

@section('title', 'Customers')

@section('content')
<section class="list-heading">
    <div><h1>Customer <em>accounts</em></h1><p class="intro">The people who make the store what it is.</p></div>
    <div class="count-block"><strong>{{ count($customers) }}</strong><span>customer<br>records</span></div>
</section>
<section class="table-section">
    <div class="table-caption"><span>CUSTOMER DIRECTORY</span><span>CONTACT DETAILS</span></div>
    <div class="table-scroll"><table><thead><tr><th>Name</th><th>Email</th><th>Phone</th></tr></thead><tbody>
    @foreach ($customers as $customer)
        <tr><td data-label="Name"><span>{{ $customer['full_name'] }}</span></td><td data-label="Email"><span><a href="mailto:{{ $customer['email'] }}">{{ $customer['email'] }}</a></span></td><td data-label="Phone"><span>{{ $customer['phone'] }}</span></td></tr>
    @endforeach
    </tbody></table></div>
</section>
@endsection
