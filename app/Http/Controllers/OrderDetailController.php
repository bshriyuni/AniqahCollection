<?php

namespace App\Http\Controllers;
use App\Models\orderDetail;
use Illuminate\Http\Request;


class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderDetails = OrderDetail::where('status', '!=', 'Selesai')->paginate(3);
        $selesai = OrderDetail::where('status', '=', 'Selesai')->paginate(3);

        return view('admin/pesanan', compact('orderDetails', 'selesai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(orderDetail $orderDetail)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request, OrderDetail $orderDetail)
    {
        $request->validate([
            'status' => 'required|in:Menunggu Konfirmasi,Proses Pengambilan,Pesanan Diambil,Selesai',
        ]);

        $orderDetail->update(['status' => $request->status]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orderDetail $orderDetail)
    {
        //
    }
}