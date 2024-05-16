@extends('admin.layout.layout')

<style>
    .addadmin {
        width: 170px;
        position: relative;
        float: right;
        padding-top: 30px;
        margin: 5px auto;
        font-size: 16px;
        color: #ffffff;
        background-color: #30302e;
        text-align: center;
        padding: 10px 0px;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .addadmin:hover {
        background-color: #252525;
        color: #ffffff;
    }
</style>
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="vendorForm" action="{{ url('/NewAdmin') }}" method="post">
                        @csrf
                        <div class="u-s-m-b-30">
                            <label for="vendorname">Name
                                <span class="astk">*</span>
                            </label>
                            <input type="text" id="vendorname" class="text-field" placeholder="Admin Name" name="name"
                                required>
                        </div>
                        <div class="u-s-m-b-30">
                            <label for="vendormobile">Mobile
                                <span class="astk">*</span>
                            </label>
                            <input type="text" id="vendormobile" class="text-field" placeholder="Admin Mobile"
                                name="mobile" required>
                        </div>
                        <div class="u-s-m-b-30">
                            <label for="vendoremail">Email
                                <span class="astk">*</span>
                            </label>
                            <input type="email" id="vendoremail" class="text-field" placeholder="Admin Email"
                                name="email" required>
                        </div>
                        <div class="u-s-m-b-30">
                            <label for="vendorpassword">Password
                                <span class="astk">*</span>
                            </label>
                            <input type="password" id="vendorpassword" class="text-field" placeholder="Admin Password"
                                name="password" required>
                        </div>

                        <div class="u-s-m-b-45">
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                @if (session('success_message'))
                    <div class="alert alert-success">
                        {{ session('success_message') }}
                    </div>
                @endif
                <div class="col-lg-12 grid-margin stretch-card">

                    <div class="card">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card-body">
                            @if (request()->is('admin/admins/admin'))
                            <button type="button" class="addadmin" data-toggle="modal" data-target="#exampleModal">
                                Add New Admin
                            </button>
                            @endif

                          
                            <h4 class="card-title">{{ $title }}</h4>
                            <div class="pt-3 table-responsive">

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Admin ID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $admin)
                                            <tr>
                                                <td>{{ $admin['id'] }}</td>
                                                <td>{{ $admin['name'] }}</td>
                                                <td>{{ $admin['type'] }}</td>
                                                <td>{{ $admin['mobile'] }}</td>
                                                <td>{{ $admin['email'] }}</td>
                                                <td>
                                                    @if ($admin['image'] != '')
                                                        <img src="{{ asset('admin/images/photos/' . $admin['image']) }}">
                                                    @else
                                                        <img src="{{ asset('admin/images/photos/no-image.gif') }}">
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($admin['status'] == 1)
                                                        <a class="updateAdminStatus" id="admin-{{ $admin['id'] }}"
                                                            admin_id="{{ $admin['id'] }}" href="javascript:void(0)">
                                                            {{-- Using HTML Custom Attributes. Check admin/js/custom.js --}}
                                                            <i style="font-size: 25px" class="mdi mdi-bookmark-check"
                                                                status="Active"></i> {{-- Icons from Skydash Admin Panel Template --}}
                                                        </a>
                                                    @else
                                                        {{-- if the admin status is inactive --}}
                                                        <a class="updateAdminStatus" id="admin-{{ $admin['id'] }}"
                                                            admin_id="{{ $admin['id'] }}" href="javascript:void(0)">
                                                            {{-- Using HTML Custom Attributes. Check admin/js/custom.js --}}
                                                            <i style="font-size: 25px" class="mdi mdi-bookmark-outline"
                                                                status="Inactive"></i> {{-- Icons from Skydash Admin Panel Template --}}
                                                        </a>
                                                    @endif
                                                </td>
                                                {{-- <td>
                                                    @if ($admin['type'] == 'vendor')
                                                        
                                                        <a href="{{ url('admin/view-vendor-details/' . $admin['id']) }}">
                                                            <i style="font-size: 25px" class="mdi mdi-file-document"></i>
                                                           
                                                        </a>
                                                    @endif
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
