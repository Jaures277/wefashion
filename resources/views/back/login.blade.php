<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jaures Okou">
    <meta name="generator" content="WE 2.1">
    <title>Se connecter</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/login/signin.css') }}" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">

    @include('errors')

    <form method="POST" action="{{ route('login.post') }}">

        @csrf

        <img class="mb-4" src="{{ asset('assets/img/img.png') }}" alt="" width="150" height="60">

        <h1 class="h3 mb-3 fw-normal">Connecter vous ici</h1>

        <div class="form-floating">
            <input placeholder="name@example.com" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            <label for="floatingInput">Email</label>
        </div>

        <div class="form-floating">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <label for="floatingPassword">Mot de passe</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Se souvenir de moi
            </label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
        <p class="mt-5 mb-3 text-muted">&copy; {{ date('Y-m-d') }}</p>

    </form>
</main>

</body>
</html>
