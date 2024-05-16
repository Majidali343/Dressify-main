@extends('admin.layout.layout')

<?php
    use App\Models\Product;
    
    $productCountvendor = Product::where('admin_id', Auth::guard('admin')->user()->id)->count();
?>

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="mb-4 col-12 col-xl-8 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome {{ Auth::guard('admin')->user()->name }}</h3> {{-- Accessing Specific Guard Instances: https://laravel.com/docs/9.x/authentication#accessing-specific-guard-instances --}} <!-- https://laravel.com/docs/9.x/authentication#retrieving-the-authenticated-user --> <!-- https://laravel.com/docs/9.x/authentication#accessing-specific-guard-instances --> <!-- https://laravel.com/docs/9.x/eloquent#retrieving-models -->
                            {{-- <h6 class="mb-0 font-weight-normal">All systems are running smoothly!</h6> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                   @if( Auth::guard('admin')->user()->type != "vendor" )
               
                    <div class="col">
                        <div class="mb-4 col-md-12 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <p class="mb-4">Total Categories</p>
                                    <p class="mb-2 fs-30">{{ $categoriesCount }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if( Auth::guard('admin')->user()->type != "vendor" )
                    <div class="col">
                        <div class="mb-4 col-md-12 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue">
                                <div class="card-body">
                                    <p class="mb-4">Total Products</p>
                                    <p class="mb-2 fs-30">{{ $productsCount }}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    @endif
                    @if( Auth::guard('admin')->user()->type == "vendor" )
                    <div class="col">
                        <div class="mb-4 col-md-3 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue">
                                <div class="card-body">
                                    <p class="mb-4">Total Products</p>
                                    <p class="mb-2 fs-30">{{ $productCountvendor }}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   @endif
                   @if( Auth::guard('admin')->user()->type != "vendor" )
                    <div class="col">
                        <div class="mb-4 col-md-12 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-4">Total Orders</p>
                                    <p class="mb-2 fs-30">{{ $ordersCount }}</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    @endif
                    @if( Auth::guard('admin')->user()->type != "vendor" )
                    <div class="col">
                        <div class="mb-4 col-md-12 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue">
                                <div class="card-body">
                                    <p class="mb-4">Total Users</p>
                                    <p class="mb-2 fs-30">{{ $usersCount }}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                     @endif
             
                
            </div>
        </div>
        <!-- content-wrapper ends -->
        @include('admin.layout.footer')
        <!-- partial -->
    </div>
@endsection