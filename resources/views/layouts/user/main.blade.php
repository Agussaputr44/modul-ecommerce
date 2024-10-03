<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="CodePixer">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="{{ asset('assets/templates/user/img/fav.png') }}">
    <title>Merch Store</title>

    @include('layouts.user.style')
</head>

<body>
    @include('sweetalert::alert')

    @include('layouts.user.navbar')

    @yield('content')

    @include('layouts.user.footer')

    @include('layouts.user.script')

</body>

</html>
