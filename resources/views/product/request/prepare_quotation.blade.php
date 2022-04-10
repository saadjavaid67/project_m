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

        <div class="row pb-5">
            <div class="pb-2"><span class="input-title">Client</span></div>
            <div class="input-sub-title">Radayat Company</div>
        </div>
        <div class="row pb-5">
            <div class="col-md pb-3 pb-md">
                <div class="pb-2"><span class="input-title">Vehicle name</span></div>
                <div class="input-sub-title">Toyota</div>
            </div>
            <div class="col-md pb-3 pb-md">
                <div class="pb-2"><span class="input-title">Vehicle type</span></div>
                <div class="input-sub-title">Pick Up</div>
            </div>
            <div class="col-md pb-3 pb-md">
                <div class="pb-2"><span class="input-title">Model</span></div>
                <div class="input-sub-title">2016</div>
            </div>
            <div class="col-md pb-3 pb-md">
                <div class="pb-2"><span class="input-title">Plate No.</span></div>
                <div class="input-sub-title">VAS 2671</div>
            </div>
            <div class="col-md pb-3 pb-md">
                <div class="pb-2"><span class="input-title">Chase No.</span></div>
                <div class="input-sub-title">367784999499942</div>
            </div>
        </div>

        {{-- form --}}
        <form class="form-group" action="" class="row">
            <table class="table table-responsive-stack table-borderless">
                <thead>
                    <th style="flex-basis: 26%"><span class="input-title">Item Name</span></th>
                    <th style="flex-basis: 20%"><span class="input-title">Item No.</span></th>
                    <th style="flex-basis: 8%"><span class="input-title">Unit</span></th>
                    <th style="flex-basis: 8%"><span class="input-title">Quantity</span></th>
                    <th style="flex-basis: 8%"><span class="input-title">Unit Price</span></th>
                    <th style="flex-basis: 8%"><span class="input-title">Total</span></th>
                    <th style="flex-basis: 10%"><span class="input-title">Unit Price 1</span></th>
                    <th style="flex-basis: 10%"><span class="input-title">Unit Price 2</span></th>
                    <th style="flex-basis: 10%"><span class="input-title">Unit Price 3</span></th>
                </thead>
                <tbody>
                    <tr class="pt-3">
                        <td style="flex-basis: 26%" class="align-self-baseline"><span
                                class="input-title table-responsive-stack-thead">Item Name</span><span
                                class="input-sub-title">Air Filter and Conditioner</span></td>
                        <td style="flex-basis: 20%" class="align-self-baseline" class=""><span
                                class="input-title table-responsive-stack-thead">Item No.</span><span class="input-sub-title">66577783889</span></td>
                        <td style="flex-basis: 12%" class="align-self-baseline"><span
                                class="input-title table-responsive-stack-thead">Unit</span><span
                                class="input-sub-title">Set</span>
                        </td>
                        <td style="flex-basis: 12%" class="align-self-baseline"><span
                                class="input-title table-responsive-stack-thead">Quantity</span><span
                                class="input-sub-title">15</span>
                        </td>
                        <td style="flex-basis: 12%" class="align-self-baseline" class=""><span
                                class="input-title table-responsive-stack-thead">Unit Price</span><span class="input-title">15</span>
                        </td>
                        <td style="flex-basis: 12%" class="align-self-baseline" class=""><span
                                class="input-title table-responsive-stack-thead">Total</span><input type="text"
                                class="input-group" style="max-width: 75px; width:100%;"></td>
                    </tr>

                    {{-- <tr class="pt-3">
                        <td style="flex-basis: 26%" class="align-self-baseline"><span
                                class="input-title table-responsive-stack-thead">Item Name</span><span
                                class="input-sub-title">Air Filter and Conditioner</span></td>
                        <td style="flex-basis: 26%" class="align-self-baseline" class=""><span
                                class="input-title table-responsive-stack-thead">Item No.</span><input type="text"
                                class="input-group" style="max-width: 232px; width:100%;"></td>
                        <td style="flex-basis: 12%" class="align-self-baseline"><span
                                class="input-title table-responsive-stack-thead">Unit</span><span
                                class="input-sub-title">Set</span>
                        </td>
                        <td style="flex-basis: 12%" class="align-self-baseline"><span
                                class="input-title table-responsive-stack-thead">Quantity</span><span
                                class="input-sub-title">15</span>
                        </td>
                        <td style="flex-basis: 12%" class="align-self-baseline" class=""><span
                                class="input-title table-responsive-stack-thead">Unit Price</span><input type="text"
                                class="input-group" style="max-width: 75px; width:100%;">
                        </td>
                        <td style="flex-basis: 12%" class="align-self-baseline" class=""><span
                                class="input-title table-responsive-stack-thead">Total</span><input type="text"
                                class="input-group" style="max-width: 75px; width:100%;"></td>
                    </tr> --}}
                </tbody>
            </table>
            
            <div class="row justify-content-between">
                <div class="col-md m-5 border px-4 py-2"
                    style="border-radius: 15px; box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);">
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

                <div class="col-md m-5 border px-4 py-2"
                    style="border-radius: 15px; box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);">
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

                <div class="col-md m-5 border px-4 py-2"
                    style="border-radius: 15px; box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);">
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


            {{-- buttons --}}
            <div class="row mt-5">
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
