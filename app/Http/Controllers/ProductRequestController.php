<?php

namespace App\Http\Controllers;

use App\Models\ProductRequest;
use Illuminate\Http\Request;

class ProductRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.request.index');
    }

    /**
     *  Show new request page.
     *
     * @return \Illuminate\Http\Response
     */
    public function new_request_show()
    {
        return view('product.request.new_request');
    }

    /**
     *  Show detail page.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail_show()
    {
        return view('product.request.detail');
    }

    /**
     * Show supplier quotation page.
     *
     * @return \Illuminate\Http\Response
     */
    public function supplier_quotation_show()
    {
        return view('product.request.supplier_quotation');
    }

    /**
     * Show prepare quotation page.
     *
     * @return \Illuminate\Http\Response
     */
    public function prepare_quotation_show()
    {
        return view('product.request.prepare_quotation');
    }

    /**
     * Show purchase order page.
     *
     * @return \Illuminate\Http\Response
     */
    public function purchase_order_show()
    {
        return view('product.request.purchase_order');
    }

    /**
     * Show pick up page.
     *
     * @return \Illuminate\Http\Response
     */
    public function pick_up_show()
    {
        return view('product.request.pick_up');
    }

    /**
     * Show delivery page.
     *
     * @return \Illuminate\Http\Response
     */
    public function delivery_show()
    {
        return view('product.request.delivery');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductRequest  $productRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ProductRequest $productRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductRequest  $productRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductRequest $productRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductRequest  $productRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductRequest $productRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductRequest  $productRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductRequest $productRequest)
    {
        //
    }
}
