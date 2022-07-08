@extends('layout')
@section('judul', 'Dashboard')
@section('isi')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row purchace-popup">
        <div class="col-12 stretch-card grid-margin">
            @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show col-12">
                        {{ session('success') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </button>
                    </div>
                    @endif
        </div>
      </div>
      <!-- Quick Action Toolbar Ends-->
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="d-sm-flex align-items-baseline report-summary-header">
                    <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                  </div>
                </div>
              </div>
              <div class="row report-inner-cards-wrapper">
                <div class=" col-md -6 col-xl report-inner-card">
                  <div class="inner-card-text">
                    <span class="report-title">EXPENSE</span>
                    <h4>$32123</h4>
                    <span class="report-count"> 2 Reports</span>
                  </div>
                  <div class="inner-card-icon bg-success">
                    <i class="icon-rocket"></i>
                  </div>
                </div>
                <div class="col-md-6 col-xl report-inner-card">
                  <div class="inner-card-text">
                    <span class="report-title">PURCHASE</span>
                    <h4>95,458</h4>
                    <span class="report-count"> 3 Reports</span>
                  </div>
                  <div class="inner-card-icon bg-danger">
                    <i class="icon-briefcase"></i>
                  </div>
                </div>
                <div class="col-md-6 col-xl report-inner-card">
                  <div class="inner-card-text">
                    <span class="report-title">QUANTITY</span>
                    <h4>2650</h4>
                    <span class="report-count"> 5 Reports</span>
                  </div>
                  <div class="inner-card-icon bg-warning">
                    <i class="icon-globe-alt"></i>
                  </div>
                </div>
                <div class="col-md-6 col-xl report-inner-card">
                  <div class="inner-card-text">
                    <span class="report-title">RETURN</span>
                    <h4>25,542</h4>
                    <span class="report-count"> 9 Reports</span>
                  </div>
                  <div class="inner-card-icon bg-primary">
                    <i class="icon-diamond"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row income-expense-summary-chart-text">
                <div class="col-xl-4">
                  <h5>Income And Expenses Summary</h5>
                  <p class="small text-muted">A comparison of people who mark themselves of their ineterest from the date range given above. Learn more.</p>
                </div>
                <div class=" col-md-3 col-xl-2">
                  <p class="income-expense-summary-chart-legend"> <span style="border-color: #6469df"></span> Total Income </p>
                  <h3>$ 1,766.00</h3>
                </div>
                <div class="col-md-3 col-xl-2">
                  <p class="income-expense-summary-chart-legend"> <span style="border-color: #37ca32"></span> Total Expense </p>
                  <h3>$ 5,698.30</h3>
                </div>
                <div class="col-md-6 col-xl-4 d-flex align-items-center">
                  <div class="input-group" id="income-expense-summary-chart-daterange">
                    <div class="inpu-group-prepend input-group-text"><i class="icon-calendar"></i></div>
                    <input type="text" class="form-control">
                    <div class="input-group-prepend input-group-text"><i class="icon-arrow-down"></i></div>
                  </div>
                </div>
              </div>
              <div class="row income-expense-summary-chart mt-3">
                <div class="col-md-12">
                  <div class="ct-chart" id="income-expense-summary-chart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex align-items-center mb-4">
                <h4 class="card-title mb-sm-0">Products Inventory</h4>
                <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
              </div>
              <div class="table-responsive border rounded p-1">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="font-weight-bold">Store ID</th>
                      <th class="font-weight-bold">Amount</th>
                      <th class="font-weight-bold">Gateway</th>
                      <th class="font-weight-bold">Created at</th>
                      <th class="font-weight-bold">Paid at</th>
                      <th class="font-weight-bold">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img class="img-sm rounded-circle" src="{{ asset('template/images/faces/face1.jpg') }}" alt="profile image"> Katie Holmes
                      </td>
                      <td>$3621</td>
                      <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                      <td>04 Jun 2019</td>
                      <td>18 Jul 2019</td>
                      <td>
                        <div class="badge badge-success p-2">Paid</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-sm rounded-circle" src="{{ asset('template/images/faces/face2.jpg" al') }}t="profile image"> Minnie Copeland
                      </td>
                      <td>$6245</td>
                      <td><img src="images/dashboard/paypal.png" alt="alipay" class="gateway-icon mr-2"> Paypal</td>
                      <td>25 Sep 2019</td>
                      <td>07 Oct 2019</td>
                      <td>
                        <div class="badge badge-danger p-2">Pending</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-sm rounded-circle" src="{{ asset('template/images/faces/face3.jpg') }}" alt="profile image"> Rodney Sims
                      </td>
                      <td>$9265</td>
                      <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                      <td>12 dec 2019</td>
                      <td>26 Aug 2019</td>
                      <td>
                        <div class="badge badge-warning p-2">Failed</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-sm rounded-circle" src="{{ asset('template/images/faces/face4.jpg') }}" alt="profile image"> Carolyn Barker
                      </td>
                      <td>$2263</td>
                      <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                      <td>30 Sep 2019</td>
                      <td>20 Oct 2019</td>
                      <td>
                        <div class="badge badge-success p-2">Paid</div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="d-flex mt-4 flex-wrap">
                <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                <nav class="ml-auto">
                  <ul class="pagination separated pagination-info">
                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
      </div>
    </footer>
    <!-- partial -->
  </div>
@endsection