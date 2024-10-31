@extends('admin.masterlayout')

@section('title', 'Dashboard Admin')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            @isset($quantityOrders)
              <h3>{{ $quantityOrders }}</h3>
            @endisset

            <p>Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            @isset($quantityUsers)
              <h3>{{ $quantityUsers }}</h3>
            @endisset

            <p>Customers</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            @isset($quantityDrivers)
              <h3>{{ $quantityDrivers }}</h3>
            @endisset

            <p>Driver</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Bounce Rate</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">

        @isset($orders)
        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">Driver order statistics</h3>
          </div>
          @if ($orders->isNotEmpty())
            <div class="card-body table-responsive p-0">
              <table class="table table-striped table-valign-middle">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Driver Name</th>
                    <th>Order Quantity</th>
                    <th>Total Amount</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($orders as $index => $order)
                    @if ($order->driver->phone_number != '0000000000')
                      <tr>
                        <td>
                          {{ $index + 1 }}
                        </td>
                        <td>
                          <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                          {{ $order->driver->name }}
                        </td>
                        <td>{{ $order->total_orders }} Order Quantity</td>
                        <td>
                          {{ $order->total_price }} Total Amount
                        </td>
                      </tr>
                    @endif
                  @endforeach

                  </tbody>
                </table>
              </div>
            @else
              <div class="card-body text-center table-responsive p-0">
                <p style="color: red">No data displayed yet</p>
              </div>
            @endif
        </div>
        @endisset
        <!-- /.card -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">Statistics</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-0">
              <p style="color: green">
                <i class="text-l nav-icon fas fa-user-friends"></i>
                Number of Drivers
              </p>
              <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                  @isset($quantityDrivers)
                    {{$quantityDrivers}}
                  @endisset
                </span>
                <span class="text-muted">Person</span>
              </p>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-0">
              <p style="color: green">
                <i class="text-l nav-icon fas fa-user-alt"></i>
                Number of customers
              </p>
              <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                  @isset($quantityUsers)
                    {{$quantityUsers}}
                  @endisset
                </span>
                <span class="text-muted">Person</span>
              </p>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-0">
              <p style="color: green">
                <i class="text-l nav-icon fas fa-shopping-cart"></i>
                Order
              </p>
              <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                  @isset($quantityOrders)
                    {{$quantityOrders}}
                  @endisset
                </span>
                <span class="text-muted">Single</span>
              </p>
            </div>
            <!-- /.d-flex -->
          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
@endsection
