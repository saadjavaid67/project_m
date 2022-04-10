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

        <div class="row pb-md-5">

            <div class="col-md pb-3 pb-md">
                <div class="input-title pb-2"><span class="input-title">Client</span></div>
                <div class="input-sub-title">Redayat Company</div>
            </div>


            <div class="col-md pb-3 pb-md">
                <div class="input-title pb-2"><span class="input-title">Purchase Order No.</span></div>
                <div class="input-sub-title">123456789</div>
            </div>

            <div class="col-md pb-3 pb-md">
                <div class="input-title pb-2"><span class="input-title">Invoice No.</span></div>
                <div class="input-sub-title">123456789</div>
            </div>

        </div>

        <div class="row pb-md-5">

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

        {{-- form --}}
        <form class="form-group" action="">
            <div class="container">

                <div class="row">
                    <div class="col-md-2">
                        <div class="py-5 mb-4 px-2 h-100 me-md-5 m-0 dba">

                        </div>
                        <span><a href="#" style="color: #170F49;">Attach Invoice</a></span>
                    </div>

                    <div class="col-md"></div>

                    <div class="col-md-3 mt-md-0 mt-5 col border p-3 invoice-card justify-content-end" style="">
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
            </div>

            <div class="row mt-5">
                <div class="col">
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
