@extends('layouts.app')

@push('css')
    <style>
       
    </style>
@endpush

@section('content')
    <div class="container mt-4">

        <div class="row text-center border-bottom pb-2 mb-5">
            <h2 class="page-title">{{ __('Request 2536') }}</h2>
        </div>

        {{-- form --}}
        <form class="form-group" action="" class="row">
            <div class="row pb-5 m-auto">
                <div class="col-md pb-3 pb-md">
                    <div class="input-title pb-2"><span class="input-title">Vehicle name</span></div>
                    <div class="input-sub-title">Toyota</div>
                </div>
                <div class="col-md pb-3 pb-md">
                    <div class="input-title pb-2"><span class="input-title">Vehicle type</span></div>
                    <div class="input-sub-title">Pick Up</div>
                </div>
                <div class="col-md pb-3 pb-md">
                    <div class="input-title pb-2"><span class="input-title">Model</span></div>
                    <div class="input-sub-title">2016</div>
                </div>
                <div class="col-md pb-3 pb-md">
                    <div class="input-title pb-2"><span class="input-title">Plate No.</span></div>
                    <div class="input-sub-title">VAS 2671</div>
                </div>
                <div class="col-md pb-3 pb-md">
                    <div class="input-title pb-2"><span class="input-title">Chase No.</span></div>
                    <div class="input-sub-title">367784999499942</div>
                </div>
            </div>

            <div class="row pb-2 m-auto">
                <table class="table table-responsive table-borderless">
                    <thead>
                        <td><span class="input-title">Item Name</span></td>
                        <td><span class="input-title">Item No.</span></td>
                        <td><span class="input-title">Unit</span></td>
                        <td><span class="input-title">Quantity</span></td>
                        <td><span class="input-title">Unit Price</span></td>
                        <td><span class="input-title">Total</span></td>
                    </thead>
                    <tbody>
                        <tr class="align-baseline">
                            <td><span class="input-sub-title">Air Filter and Conditioner</span></td>
                            <td class=""><input type="text" class="input-group" style="max-width: 232px; width:100%;"></div></td>
                            <td><span class="input-sub-title">Set</span></td>
                            <td><span class="input-sub-title ps-4">15</span></td>
                            <td class=""><input type="text" class="input-group" style="max-width: 75px; width:100%;"></div></td>
                            <td class=""><input type="text" class="input-group" style="max-width: 75px; width:100%;"></div></td>
                        </tr>
                       
                        
                    </tbody>
                  </table>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-3 col border p-3 invoice-card" style="">
                    <div class="row border-bottom p-2">
                        <div class="col"><span class="input-title">Subtotal</span></div>
                        <div class="col text-center"><span>-</span></div>
                    </div>
                    <div class="row border-bottom p-2">
                        <div class="col"><span class="input-title">VAT 15%</span></div>
                        <div class="col text-center"><span>-</span></div>
                    </div>
                    <div class="row p-2">
                        <div class="col"><span class="input-title">Total</span></div>
                        <div class="col text-center"><span>-</span></div>
                    </div>
                </div>
            </div>
        
            <div class="row mt-5">
                <div class="col">
                    <span><a href="#" style="color: #170F49;">Attach Request Pdf</a></span>
                </div>

                {{-- buttons --}}
                <div class="col">
                    <div class="d-flex flex-column flex-md-row justify-content-end align-items-end text-light">
                        <button type="button" class="btn btn-danger m-2">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-primary m-2">
                            Confirm
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
