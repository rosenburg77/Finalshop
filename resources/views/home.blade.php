@extends('base')

@section('content')

<!-- Your home page content goes here -->

<!-- The Login Form -->
<div class="login-form">
    <form action="{{ route('auth.login.post') }}" method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Your username..">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your password..">

        <label for="captcha">Captcha</label>
        <input type="text" id="captcha" name="captcha" placeholder="Enter captcha..">

        <input type="submit" value="Submit">
    </form>
</div>

@endsection
