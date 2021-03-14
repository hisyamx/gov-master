<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets') }}/images/logo.svg">
    <title>@yield('title')</title>

    @include('admin/layouts/header')

    @include('admin/layouts/sidebar')
    <!-- Main Content -->

    @yield('content')
    @include('admin/layouts/footer')
    </body>
</html>
