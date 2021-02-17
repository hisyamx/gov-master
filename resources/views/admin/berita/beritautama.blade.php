@extends('admin.layouts.master')
@section('title', 'Berita Utama')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        {{-- Berita --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Berita Utama</h4>
                    </div>
                    <div id="editor">This is some sample content.</div>
                    <div class="form-group row">
                        @if(!Auth::user())
                            <label for="blog-post" class="col-sm-3 text-left control-label col-form-label">Blog Post</label>
                            <div class="col-sm-12">
                                <textarea id="blog-post" name="blog-post" class="blog-post form-control @error('blog-post') is-invalid @enderror"
                                rows="10" cols="80" placeholder="Write your blog post content here" required></textarea>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection
