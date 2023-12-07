@extends('Backend.admin_master')
@section('content')

<div class="row">
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sales of This Month</h5>
          <p class="card-text">1000</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Sales Amount</h5>
          <p class="card-text">50000</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Purchase of This Month</h5>
          <p class="card-text">6000</p>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Purchase Amount</h5>
          <p class="card-text">90000</p>

        </div>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-sm-6">
        <div class="row">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Sales of This Month</h5>
                  <p class="card-text">1000</p>
                </div>
              </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Sales of This Month</h5>
                  <p class="card-text">1000</p>
                </div>
              </div>
        </div>

    </div>

    <div class="col-sm-6">
        <div class="card">
            <table class="table">
                <thead>
                    <h5 class="card-title">Profit / Loss of Last 10 Days</h5>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Date</th>
                        <th scope="col">Income</th>
                        <th scope="col">Expense</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>12\2\23</td>
                        <td>1200</td>
                        <td>1000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>


@endsection
