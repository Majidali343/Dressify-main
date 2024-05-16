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
                    <form id="vendorForm" action="{{ url('admin/newinvoice') }}" method="post">
                        @csrf

                        <div class="u-s-m-b-30">
                            <label for="transaction_id">Seller</label>
                            <select class="text-field" id="Seller" name="seller_id" required>
                                <option value="">Select Seller</option>
                                @foreach ($vendors as $seller)
                                    <option value="{{ $seller->vendor_id }}">{{ $seller->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="u-s-m-b-30">
                            <label for="transaction_id">Transaction Id
                                <span class="astk">*</span>
                            </label>
                            <input type="text" id="transaction_id" class="text-field" placeholder="Transaction Id"
                                name="transaction_id" required>
                        </div>
                        <div class="u-s-m-b-30">
                            <label for="amount">Amount
                                <span class="astk">*</span>
                            </label>
                            <input type="text" id="amount" class="text-field" placeholder="Enter Amount"
                                name="amount" required>
                        </div>
                        <div class="u-s-m-b-30">
                            <label for="transaction_id">Paid Status
                                <span class="astk">*</span>
                            </label>
                            <input type="text" id="paid_status" class="text-field" placeholder="paid status"
                                name="paid_status" required>
                        </div>


                        <div class="u-s-m-b-45">
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    {{-- vendor_id --}}
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">

                        <div class="card-body">
                            @if (Auth::guard('admin')->user()->type == 'superadmin' || Auth::guard('admin')->user()->type == 'admin')
                            <button type="button" class="addadmin" data-toggle="modal" data-target="#exampleModal">
                                new Invoice
                            </button>
                            @endif
                            <h4 class="card-title">Invoice Management</h4>
                            <div class="pt-3 table-responsive">

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Invoice ID</th>
                                            <th>Seller Name</th>
                                            <th>Transaction ID</th>
                                            <th>Paid Status</th>
                                            <th>Amount</th>
                                            @if (Auth::guard('admin')->user()->type == 'superadmin' || Auth::guard('admin')->user()->type == 'admin')
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @if (Auth::guard('admin')->user()->type == 'superadmin' || Auth::guard('admin')->user()->type == 'admin')
                                            @foreach ($invoices as $invoice)
                                                <tr>
                                                    <td>{{ $invoice->invoice_id }}</td>
                                                    <td>{{ $invoice->name }}</td>
                                                    <td>{{ $invoice->transaction_id }}</td>
                                                    <td>{{ $invoice->paid_status }}</td>
                                                    <td>{{ $invoice->amount }}</td>
                                                    <td>
                                                        <!-- Delete form -->
                                                        <form action="{{ route('invoices.destroy', $invoice->invoice_id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @else
                                   
                                            @foreach ($invoices as $invoice)
                                         
                                            @if($invoice->seller_id == Auth::guard('admin')->user()->vendor_id)
                                                <tr>
                                                    <td>{{ $invoice->invoice_id }}</td>
                                                    <td>{{ $invoice->name }}</td>
                                                    <td>{{ $invoice->transaction_id }}</td>
                                                    <td>{{ $invoice->paid_status }}</td>
                                                    <td>{{ $invoice->amount }}</td>
                                                    @if (Auth::guard('admin')->user()->type == 'superadmin' || Auth::guard('admin')->user()->type == 'admin')
                                                    <td>
                                                        <!-- Delete form -->
                                                        <form
                                                            action="{{ route('invoices.destroy', $invoice->invoice_id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                     @endif
                                                </tr>
                                                @endif
                                            @endforeach
                                        @endif

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
