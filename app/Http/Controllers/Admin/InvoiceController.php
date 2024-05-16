<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Invoice;
use DB;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = DB::table('invoices')
            ->join('vendors', 'invoices.seller_id', '=', 'vendors.id')
            ->select('invoices.id as invoice_id', 'invoices.*', 'vendors.id as vendor_id', 'vendors.name')
            ->get();
    
            
       $vendors = Admin::where('type', 'vendor')->get();

    
        return view('admin.invoices.invoice', compact('invoices', 'vendors'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'seller_id' => 'required|integer',
            'transaction_id' => 'required|integer',
            'paid_status' => 'required|string',
            'amount' => 'nullable|integer',
        ]);

        Invoice::create($request->all());

        $message = 'Invoice created successfully!';

        return redirect()->back()->with('success_message', $message);

    }

    // Display the specified resource.
    public function show(Invoice $invoice)
    {

        return view('invoices.show', compact('invoice'));
    }
    

    // Show the form for editing the specified resource.
    public function edit(Invoice $invoice)
    {
        return view('invoices.edit', compact('invoice'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'seller_id' => 'required|integer',
            'transaction_id' => 'required|integer',
            'paid_status' => 'required|string',
            'amount' => 'nullable|integer',
        ]);

        $invoice->update($request->all());

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice updated successfully');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        Invoice::where('id', $id)->delete();
        $message = 'Invoice deleted successfully!';

        return redirect()->back()->with('success_message', $message);
    }
    
}

