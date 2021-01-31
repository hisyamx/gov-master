@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Monthly Budget Summary</h4>
                    </div>

                    <div class="card-body card-type-4">
                        <div class="row pt-3 pb-3">
                            <div class="col-auto">
                                <div class="card-square l-bg-green text-white">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-small float-right font-weight-bold text-muted"><span
                                        class="text-success">13.1%</span></div>
                                <div class="font-weight-bold">Inquiry</div>
                                <div class="progress" data-height="5">
                                    <div class="progress-bar l-bg-green" role="progressbar" data-width="80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-small float-right font-weight-bold text-muted">9,917</div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3">
                            <div class="col-auto">
                                <div class="card-square l-bg-cyan text-white">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-small float-right font-weight-bold text-muted"><span
                                        class="text-danger">1.7%</span></div>
                                <div class="font-weight-bold">New Customers</div>
                                <div class="progress" data-height="5">
                                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="67%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-small float-right font-weight-bold text-muted">1,053</div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3">
                            <div class="col-auto">
                                <div class="card-square l-bg-orange text-white">

                                    <i class="far fa-credit-card"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-small float-right font-weight-bold text-muted"><span
                                        class="text-success">9%</span></div>
                                <div class="font-weight-bold">Orders</div>
                                <div class="progress" data-height="5">
                                    <div class="progress-bar l-bg-orange" role="progressbar" data-width="58%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-small float-right font-weight-bold text-muted">715</div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3">
                            <div class="col-auto">
                                <div class="card-square l-bg-purple text-white">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-small float-right font-weight-bold text-muted"><span
                                        class="text-success">4.9%</span></div>
                                <div class="font-weight-bold">Sales</div>
                                <div class="progress" data-height="5">
                                    <div class="progress-bar l-bg-purple" role="progressbar" data-width="58%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-small float-right font-weight-bold text-muted">$8,965</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Monthly Sales</h4>
                    </div>
                    <div class="card-body">
                        <div id="monthlySalesChart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Yearly Sales</h4>
                    </div>
                    <div class="card-body">
                        <div id="yearlySalesChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Sales by Countries</h4>
                    </div>
                    <div class="card-body">
                        <div id="salesByCountriesChart" class="chartsh"></div>
                        <div class="row">
                            <div class="col-sm-3 col-6 mb-md-0 mb-4 text-center">
                                <div class="img-shadow flag-icon flag-icon-us"></div>
                                <div class="mt-2 font-weight-bold text-nowrap">USA</div>
                                <div class="text-small text-muted">9,500</div>
                            </div>
                            <div class="col-sm-3 col-6 mb-md-0 mb-4 text-center">
                                <div class="img-shadow flag-icon flag-icon-de"></div>
                                <div class="mt-2 font-weight-bold text-nowrap">Germany</div>
                                <div class="text-small text-muted"><span class="text-primary"><i
                                            class="fas fa-caret-up"></i></span> 6,100</div>
                            </div>
                            <div class="col-sm-3 col-6 text-center">
                                <div class="img-shadow flag-icon flag-icon-in"></div>
                                <div class="mt-2 font-weight-bold text-nowrap">India</div>
                                <div class="text-small text-muted">8,500</div>
                            </div>
                            <div class="col-sm-3 col-6 text-center">
                                <div class="img-shadow flag-icon flag-icon-kh"></div>
                                <div class="mt-2 font-weight-bold text-nowrap">Cambodia</div>
                                <div class="text-small text-muted">1,600</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Recent Project in Queue</h4>
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
                                <tr>
                                    <td>Project 2</td>
                                    <td class="font-weight-600">Dorothy Hike</td>
                                    <td>March 18, 2020</td>
                                    <td>
                                        <div class="badge badge-info">Pending</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Project 3</td>
                                    <td class="font-weight-600">Nancy Burton</td>
                                    <td>November 01, 2019</td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Project 4</td>
                                    <td class="font-weight-600">Jessica Hill</td>
                                    <td>May 25, 2019</td>
                                    <td>
                                        <div class="badge badge-warning">In Progress</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Project 5</td>
                                    <td class="font-weight-600">Michael Gardner</td>
                                    <td>February 05, 2020</td>
                                    <td>
                                        <div class="badge badge-danger">cancelled</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Project 6</td>
                                    <td class="font-weight-600">Wiltor Stone</td>
                                    <td>February 29, 2020</td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Project 7</td>
                                    <td class="font-weight-600">Emily Johnson</td>
                                    <td>March 25, 2020</td>
                                    <td>
                                        <div class="badge badge-info">Pending</div>
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
            <div class="col-lg-5 col-md-12 col-sm-12">
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
                            <li class="media">
                                <img alt="image" class="mr-3 rounded-circle" width="50"
                                    src="{{asset('assets')}}/images/users/user-4.png">
                                <div class="media-body">
                                    <div class="media-title">John Doe</div>
                                    <div class="text-muted">Your password will be expired...</div>
                                </div>
                                <div class="media-cta">
                                    <div class="text-job text-muted">10:01 PM</div>
                                </div>
                            </li>
                            <li class="media">
                                <img alt="image" class="mr-3 rounded-circle" width="50"
                                    src="{{asset('assets')}}/images/users/user-1.png">
                                <div class="media-body">
                                    <div class="media-title">Michael Gardner</div>
                                    <div class="text-muted">We are introducing new features...</div>
                                </div>
                                <div class="media-cta">
                                    <div class="text-job text-muted">11:50 PM</div>
                                </div>
                            </li>
                            <li class="media">
                                <img alt="image" class="mr-3 rounded-circle" width="50"
                                    src="{{asset('assets')}}/images/users/user-3.png">
                                <div class="media-body">
                                    <div class="media-title">Wiltor Stone</div>
                                    <div class="text-muted">We will solve your issue soon...</div>
                                </div>
                                <div class="media-cta">
                                    <div class="text-job text-muted">01:15 AM</div>
                                </div>
                            </li>
                            <li class="media">
                                <img alt="image" class="mr-3 rounded-circle" width="50"
                                    src="{{asset('assets')}}/images/users/user-2.png">
                                <div class="media-body">
                                    <div class="media-title">Nancy Burton</div>
                                    <div class="text-muted">please find attached My email copy...</div>
                                </div>
                                <div class="media-cta">
                                    <div class="text-job text-muted">08:11 AM</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card author-box">
                    <div class="card-header">
                        <h4>Social Source</h4>
                    </div>
                    <div class="card-body">
                        <div class="author-box-center">
                            <img alt="image" src="{{asset('assets')}}/images/logo.png" class="author-box-picture">
                            <div class="clearfix"></div>
                            <div class="author-box-name">
                                <a href="index.html#">Grexa</a>
                            </div>
                            <div class="author-box-job">Total - 1076 Sales</div>
                        </div>
                        <div class="text-center">
                            <div class="author-box-description">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                                    voluptatum alias molestias
                                    minus quod dignissimos.
                                </p>
                            </div>
                            <div class="mb-2 mt-3">
                                <div class="text-small font-weight-bold">Follow Grexa On</div>
                            </div>
                            <a href="index.html#" class="btn btn-social-icon mr-1 btn-facebook" data-toggle="tooltip"
                                title="" data-original-title="501 Sales">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="index.html#" class="btn btn-social-icon mr-1 btn-twitter" data-toggle="tooltip"
                                title="" data-original-title="267 Sales">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="index.html#" class="btn btn-social-icon mr-1 btn-instagram" data-toggle="tooltip"
                                title="" data-original-title="308 Sales">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <div class="w-100 d-sm-none"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Transcation</h4>
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
                                <tr>
                                    <td>#TD1231</td>
                                    <td>Henry Smith</td>
                                    <td>250$</td>
                                    <td>2020-01-08</td>
                                    <td>
                                        <div class="badge badge-info badge-shadow">Refund</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>#TD1232</td>
                                    <td>Barry Hick</td>
                                    <td>350$</td>
                                    <td>2019-12-29</td>
                                    <td>
                                        <div class="badge badge-success badge-shadow">Paid</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>#TD1233</td>
                                    <td>Ronald Taylor</td>
                                    <td>435$</td>
                                    <td>2020-02-02</td>
                                    <td>
                                        <div class="badge badge-danger badge-shadow">Chargeback</div>
                                    </td>
                                    <td>
                                        <div class="media-cta-square">
                                            <a href="index.html#" class="btn btn-outline-primary">Detail</a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>#TD1234</td>
                                    <td>Ava Johnson</td>
                                    <td>220$</td>
                                    <td>2020-02-27</td>
                                    <td>
                                        <div class="badge badge-info badge-shadow">Refund</div>
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
    </section>
</div>
@endsection