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
                <div class="input-title pb-2"><span class="input-title">Purchase Order No.</span></div>
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
            <div class="row m-auto pb-3">
                <table class="table table-responsive-stack table-borderless">
                    <thead>
                        <th style="flex-basis: 26%"><span class="input-title">Item Name</span></th>
                        <th style="flex-basis: 26%"><span class="input-title">Item No.</span></th>
                        <th style="flex-basis: 12%"><span class="input-title">Unit</span></th>
                        <th style="flex-basis: 12%"><span class="input-title">Quantity</span></th>
                        <th style="flex-basis: 5%" class="text-center"><span class="input-title">Received</span></th>
                    </thead>
                    <tbody>
                        <tr class="pt-3">
                            <td style="flex-basis: 26%" class="align-self-center"><span
                                    class="input-title table-responsive-stack-thead">Item Name</span><span
                                    class="input-sub-title">Air Filter and Conditioner</span></td>
                            <td style="flex-basis: 26%" class="align-self-center" class=""><span
                                    class="input-title table-responsive-stack-thead">Item No.</span>12345678909</td>
                            <td style="flex-basis: 12%" class="align-self-center"><span
                                    class="input-title table-responsive-stack-thead">Unit</span><span
                                    class="input-sub-title">Set</span>
                            </td>
                            <td style="flex-basis: 12%" class="align-self-center"><span
                                    class="input-title table-responsive-stack-thead">Quantity</span><span
                                    class="input-sub-title">15</span>
                            </td>
                            <td style="flex-basis: 5%" class="align-self-center" class=""><span
                                    class="input-title table-responsive-stack-thead">Received</span><input type="checkbox"
                                    class="input-group mx-auto" style="max-width: 50px; width:100%;">
                            </td>
                        </tr>

                        <tr class="pt-3">
                            <td style="flex-basis: 26%" class="align-self-center"><span
                                    class="input-title table-responsive-stack-thead">Item Name</span><span
                                    class="input-sub-title">Air Filter and Conditioner</span></td>
                            <td style="flex-basis: 26%" class="align-self-center" class=""><span
                                    class="input-title table-responsive-stack-thead">Item No.</span>12334568765</td>
                            <td style="flex-basis: 12%" class="align-self-center"><span
                                    class="input-title table-responsive-stack-thead">Unit</span><span
                                    class="input-sub-title">Set</span>
                            </td>
                            <td style="flex-basis: 12%" class="align-self-center"><span
                                    class="input-title table-responsive-stack-thead">Quantity</span><span
                                    class="input-sub-title">15</span>
                            </td>
                            <td style="flex-basis: 5%" class="align-self-center" class=""><span
                                    class="input-title table-responsive-stack-thead">Received</span><input type="checkbox"
                                    class="input-group mx-auto" style="max-width: 50px; width:100%;">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="form-group">

                <div class="row">
                    <div class="col-md">
                        <textarea placeholder="Comment" id="floatingTextarea2" class="w-100 p-4" style="height: 100px" autofocus></textarea>

                    </div>
                </div>
            </div>

            {{-- buttons --}}
            <div class="col mt-5">
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
