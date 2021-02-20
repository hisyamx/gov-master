<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets') }}/css/app.min.css">
    <link rel="stylesheet" href="{{asset('assets') }}/bundles/jquery-selectric/selectric.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets') }}/css/components.css">
    <!-- Custom style CSS -->

    <link rel='shortcut icon' type='image/x-icon' href='{{asset('assets') }}/img/favicon.ico' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-2">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand login-brand-color">
                            <img alt="image" src="{{asset('assets') }}/img/logo.svg"/>
                        </div>
                        <div class="card">
                            <div class="card-header card-header-auth">
                                <h4>Register</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password-confirm" class="d-block">Password Confirmation</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-auth-color btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="mb-4 text-muted text-center">
                                Already Registered? <a href="{{ route('register') }}">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{{asset('assets') }}/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="{{asset('assets') }}/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="{{asset('assets') }}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="{{asset('assets') }}/js/page/auth-register.js"></script>
    <!-- Template JS File -->
    <script src="{{asset('assets') }}/js/scripts.js"></script>

</body>

</html>
