@extends('admin.layouts.master')

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
                    <div class="card-body">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped">
                                <tr>
                                    <th>Project Name</th>
                                    <th>Customer</th>
                                    <th>Conversion Start Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>Project 1</td>
                                    <td class="font-weight-600">Amiah Smith</td>
                                    <td>April 30, 2020</td>
                                    <td>
                                        <div class="badge badge-danger">cancelled</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Press Release</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped">
                                <tr>
                                    <th>Project Name</th>
                                    <th>Customer</th>
                                    <th>Conversion Start Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>Project 1</td>
                                    <td class="font-weight-600">Amiah Smith</td>
                                    <td>April 30, 2020</td>
                                    <td>
                                        <div class="badge badge-danger">cancelled</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Agenda --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Agenda Sekretariat</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-1">
                            <table class="table table-striped">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Billing Name</th>
                                    <th>Total</th>
                                    <th>Due Date</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>#TD1230</td>
                                    <td>John Mitchell</td>
                                    <td>150$</td>
                                    <td>2020-01-20</td>
                                    <td>
                                        <div class="badge badge-success badge-shadow">Paid</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Agenda DPRD</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-1">
                            <table class="table table-striped">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Billing Name</th>
                                    <th>Total</th>
                                    <th>Due Date</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>#TD1230</td>
                                    <td>John Mitchell</td>
                                    <td>150$</td>
                                    <td>2020-01-20</td>
                                    <td>
                                        <div class="badge badge-success badge-shadow">Paid</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Press Release</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped">
                                <tr>
                                    <th>Project Name</th>
                                    <th>Customer</th>
                                    <th>Conversion Start Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>Project 1</td>
                                    <td class="font-weight-600">Amiah Smith</td>
                                    <td>April 30, 2020</td>
                                    <td>
                                        <div class="badge badge-danger">cancelled</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Inbox --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Inbox</h4>
                    </div>
                    <div class="card-body mt-2 mb-1">
                        <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder mt-2">
                            <li class="media">
                                <img alt="image" class="mr-3 rounded-circle" width="50"
                                    src="{{asset('assets')}}/img/users/user-5.png">
                                <div class="media-body">
                                    <div class="media-title">Amiah Smith</div>
                                    <div class="text-muted">I just finished my work.Let me know...</div>
                                </div>

                                <div class="media-cta">
                                    <div class="text-job text-muted">09:30 PM</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
