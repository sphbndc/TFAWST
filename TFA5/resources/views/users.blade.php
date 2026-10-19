@extends('layouts.app')

@section('title', 'Users')

@section('content')
<section class="list-heading">
    <div><h1>User <em>accounts</em></h1><p class="intro">A quick look at the team behind the counter.</p></div>
    <div class="count-block"><strong>{{ count($users) }}</strong><span>staff<br>records</span></div>
</section>
<section class="table-section">
    <div class="table-caption"><span>STAFF DIRECTORY</span><span>ACCOUNT DETAILS</span></div>
    <div class="table-scroll"><table><thead><tr><th>Username</th><th>Full name</th><th>Role</th></tr></thead><tbody>
    @foreach ($users as $user)
        <tr><td data-label="Username"><span class="username">{{ '@'.$user['username'] }}</span></td><td data-label="Full name"><span>{{ $user['full_name'] }}</span></td><td data-label="Role"><span class="role">{{ $user['role'] }}</span></td></tr>
    @endforeach
    </tbody></table></div>
</section>
@endsection
