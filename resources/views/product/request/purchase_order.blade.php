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

        <div class="row pb-5 align-items-center mx-auto">
            <div class="col-lg">
                <div class="pb-2"><span class="input-title">Client</span></div>
                <div class="input-sub-title">Radayat Company</div>
            </div>
            <div class="col-lg form-group">
                <div class="pb-2"><span class="input-title">Purchase Order No.</span></div>
                <input type="text" class="input-group w-75">
            </div>
        </div>

        <form action="" class="form-group">
            <div class="row mx-auto">
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

            <div class="row justify-content-between">
                <div class="col-lg m-3 m-md-5 border px-4 py-2"
                    style="border-radius: 15px; box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);">
                    <div class="d-flex justify-content-end">
                        <label for="">
                            <input class="" type="checkbox" name="" id="" s>
                        </label>

                    </div>
                    <div class="">
                        <div class="border p-5 mx-auto"
                            style="border-radius: 15px; box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);  height: 208px">

                        </div>
                    </div>
                    <div class="row border-bottom p-2">
                        <div class="input-title pb-3 border-bottom text-center mb-2"><span style="font-size: 22px;"
                                class="input-title">Munira Quotation</span></div>
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

                <div class="col-lg m-3 m-md-5 border px-4 py-2"
                    style="border-radius: 15px; box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);">
                    <div class="d-flex justify-content-end">
                        <label for="">
                            <input class="" type="checkbox" name="" id="" s>
                        </label>

                    </div>
                    <div class="">
                        <div class="border p-5 mx-auto"
                            style="border-radius: 15px; box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);  height: 208px">

                        </div>
                    </div>
                    <div class="row border-bottom p-2">
                        <div class="input-title pb-3 border-bottom text-center mb-2"><span style="font-size: 22px;"
                                class="input-title">Nouf Quotation</span></div>
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
                <div class="col-lg m-3 m-md-5 border px-4 py-2"
                    style="border-radius: 15px; box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);">
                    <div class="d-flex justify-content-end">
                        <label for="">
                            <input class="" type="checkbox" name="" id="" s>
                        </label>

                    </div>
                    <div class="">
                        <div class="border p-5 mx-auto"
                            style="border-radius: 15px; box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);  height: 208px">

                        </div>
                    </div>
                    <div class="row border-bottom p-2">
                        <div class="input-title pb-3 border-bottom text-center mb-2"><span style="font-size: 22px;"
                                class="input-title">Loubin Quotation</span></div>
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

                </div>

                {{-- buttons --}}
                <div class="col">
                    <div class="d-flex flex-column flex-md-row justify-content-end align-items-end text-light">
                        <button type="reset" class="btn btn-danger m-2">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary m-2">
                            Confirm
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
