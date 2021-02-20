@extends('admin.layouts.master')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Multiple Upload</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="multiple-upload.html#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="multiple-upload.html#">Advanced</a></div>
                <div class="breadcrumb-item">Multiple Upload</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Multiple Upload</h4>
                        </div>
                        <div class="card-body">
                            <form action="multiple-upload.html#" class="dropzone" id="mydropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
