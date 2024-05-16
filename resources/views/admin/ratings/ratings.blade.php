{{-- This view is rendered by ratings() method in Admin/RatingController.php --}}
@extends('admin.layout.layout')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ratings</h4>

                            {{-- Displaying The Validation Errors: https://laravel.com/docs/9.x/validation#quick-displaying-the-validation-errors AND https://laravel.com/docs/9.x/blade#validation-errors --}}
                            {{-- Determining If An Item Exists In The Session (using has() method): https://laravel.com/docs/9.x/session#determining-if-an-item-exists-in-the-session --}}
                            {{-- Our Bootstrap success message in case of updating admin password is successful: --}}
                            @if (Session::has('success_message'))
                                <!-- Check AdminController.php, updateAdminPassword() method -->
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success:</strong> {{ Session::get('success_message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            @if (Auth::guard('admin')->user()->type == 'vendor')
                                <div class="pt-3 table-responsive">
                                    {{-- DataTable --}}
                                    <table id="ratings" class="table table-bordered"> {{-- using the id here for the DataTable --}}
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product Name</th>
                                                <!-- <th>User Email</th> -->
                                                <th>Review</th>
                                                <th>Rating</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach ($ratings as $rating)
                                            
                                            
                                                @if ($rating['user_id'] == Auth::guard('admin')->user()->vendor_id)
                                                    <tr>
                                                        <td>{{ $rating['id'] }}</td>
                                                        <td>
                                                            <a target="_blank"
                                                                href="{{ url('product/' . $rating['product_id']) }}">
                                                                {{ $rating['product']['product_name'] }}
                                                            </a>
                                                        </td>
                                                        <!-- <td>{{ $rating['user']['email'] }}</td> -->
                                                        <td>{{ $rating['review'] }}</td>
                                                        <td>{{ $rating['rating'] }}</td>
                                                        
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="pt-3 table-responsive">
                                    {{-- DataTable --}}
                                    <table id="ratings" class="table table-bordered"> {{-- using the id here for the DataTable --}}
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product Name</th>
                                                <!-- <th>User Email</th> -->
                                                <th>Review</th>
                                                <th>Rating</th>
                                                {{-- <th>Status</th> --}}
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                        // @foreach ($ratings as $rating)
                                                <tr>
                                                    <td>{{ $rating['id'] }}</td>
                                                    <td>
                                                        <a target="_blank"
                                                            href="{{ url('product/' . $rating['product_id']) }}">
                                                            {{ $rating['product']['product_name'] }}
                                                        </a>
                                                    </td>//


                                                
                                                    <td>{{ $rating['review'] }}</td>
                                                    <td>{{ $rating['rating'] }}</td>
                                                    {{-- <td>
                                                        @if ($rating['status'] == 1)
                                                            <a class="updateRatingStatus" id="rating-{{ $rating['id'] }}"
                                                                rating_id="{{ $rating['id'] }}" href="javascript:void(0)">
                                                                <i style="font-size: 25px" class="mdi mdi-bookmark-check"
                                                                    status="Active"></i> 
                                                            </a>
                                                        @else
                                                            <a class="updateRatingStatus" id="rating-{{ $rating['id'] }}"
                                                                rating_id="{{ $rating['id'] }}" href="javascript:void(0)">
                                                                <i style="font-size: 25px" class="mdi mdi-bookmark-outline"
                                                                    status="Inactive"></i> 
                                                            </a>
                                                        @endif
                                                    </td> --}}
                                                    <td>
                                                        {{-- <a href="{{ url('admin/add-edit-rating/' . $rating['id']) }}">
                                                        <i style="font-size: 25px" class="mdi mdi-pencil-box"></i>  
                                                       
                                                    </a> --}}

                                                        {{-- Confirm Deletion JS alert and Sweet Alert --}}
                                                        <a title="Rating" class="confirmDelete"
                                                            href="{{ url('admin/delete-rating/' . $rating['id']) }}">
                                                            <i style="font-size: 25px" class="mdi mdi-file-excel-box"></i>

                                                        </a>
                                                        {{-- <a href="JavaScript:void(0)" class="confirmDelete" module="rating" moduleid="{{ $rating['id'] }}">
                                                        <i style="font-size: 25px" class="mdi mdi-file-excel-box"></i> 
                                                    </a> --}}
                                                    </td>
                                                </tr>
                                            @endforeach//
                                        </tbody>
                                    </table>
                                </div>
                            @endif





                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-center text-muted text-sm-left d-block d-sm-inline-block">Copyright © 2024. All rights
                    reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
