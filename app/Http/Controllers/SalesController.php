<?php

namespace App\Http\Controllers;


use App\Models\PaymentStatus;
use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\Sales;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::select('s.buyer_name', 's.buyer_phone', 's.sale_price', 's.paid_price', 's.remaining_price', 'ps.name as payment_status', 'p.title as property_title', 'p.address as property_address', 'p.city as city')
        ->from('sales as s')
        ->join('payment_status as ps', 's.payment_status_id', '=', 'ps.id')
        ->join('properties as p', 's.property_id', '=', 'p.id')
        ->join('property_type as pt', 's.property_type_id', '=', 'pt.id')
        ->orderBy('s.id', 'desc')
        ->get();

        return view('admin.pages.sales.index', compact('sales'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $properties = Properties::all();
            $paymentStatus = PaymentStatus::all();
    return view('admin.pages.sales.create', compact('properties', 'paymentStatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        Sales::create([

            'property_id' => $request->property_id,
            'buyer_name' => $request->buyer_name,
            'buyer_phone' => $request->buyer_phone,
            'sale_price' => $request->price,
            'paid_price' => $request->paid_price,
            'remaining_price' => $request->remaining_price,
            'payment_status_id' => $request->payment_status_id,
            'size' => $request->size,
            'measurement_id' => $request->measurement_id,
            'address' => $request->address,
            'city' => $request->city,
            'area' => $request->area,
            'notes' => $request->notes,
        

        ]);

        return redirect()
        ->route('properties.index')
        ->with('success', 'Property Added Successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show( $s)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $s)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $s)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $s)
    {
        //
    }
}
