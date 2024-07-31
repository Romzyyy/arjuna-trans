@extends('layouts.adminSide')

@section('navcontent')
    <div class="col-md-10 main-content">
        <h2 class="mb-4">Dashboard</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Revenue</h5>
                            <h2 class="mb-0">$4805</h2>
                            <small class="text-success">↑$34 from last week</small>
                        </div>
                        <div class="card-icon bg-danger">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">
                                Total Customers
                            </h5>
                            <h2 class="mb-0">1,234</h2>
                            <small class="text-success">↑12% from last week</small>
                        </div>
                        <div class="card-icon bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">
                                Store Visitors
                            </h5>
                            <h2 class="mb-0">2,456</h2>
                            <small class="text-success">↑15% from last week</small>
                        </div>
                        <div class="card-icon bg-success">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Bounce Rate</h5>
                            <h2 class="mb-0">25%</h2>
                            <small class="text-danger">↓5% from last week</small>
                        </div>
                        <div class="card-icon bg-warning">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
