
    @extends('users.master')
    @section('title', 'PPID - DPRD')
        
    @section('content')

    <div class="w3l-error-grid py-5 text-center">
        <div class="container py-lg-5 py-md-4">
            <div class="center-align">
                <h1>404</h1>
                <h2>Page not found</h2>
                <p>We are very sorry for the inconvinience. Its look like you're trying to acces a page that has been
                    deleted or never even existed.</p>

                <div class="mt-5">
                    <a href="/beranda" class="btn-small"> Back to home</a>
                </div>
            </div>
        </div>
    </div>
    @endsection