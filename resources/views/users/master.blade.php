<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('/assets')}}/images/logo.svg">

    @include('users/header')

    @yield('content')

    @include('users/footer')

</body>
</html>
