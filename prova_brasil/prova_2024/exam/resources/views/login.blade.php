<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('style/global.css') }}">

</head>

<body id="body-flex" class="container">


    <form id="form-index" method="post" action="{{ route('login.submit') }}">
        @csrf

        <label for="email_user">Email</label>
        <input id="email_user" type="email" name="email" placeholder="Your Email" required>

        <label for="email_user">Password</label>
        <input id="email_user" type="password" name="password" placeholder="Your Password" required>

        <input type="submit">

        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif

        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

    </form>

</body>
