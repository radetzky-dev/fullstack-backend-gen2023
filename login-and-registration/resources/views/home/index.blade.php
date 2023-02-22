@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Dashboard for Logged!</h1>
            <p class="lead">Only authenticated users can access this section.</p>
            <p>Show something</p>
        @endauth

        @guest
            <h1>Homepage</h1>
            <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
            <p class="lead">user: test pwd:test1234</p>
        @endguest
    </div>
@endsection
