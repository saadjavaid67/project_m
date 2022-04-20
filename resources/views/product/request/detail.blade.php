@extends('layouts.app')

@push('css')
    <style>
        .check {
            color: #6FCF97;
        }

        .un-check {
            color: #bdbdbd;
        }

        .bg-uncheck {
            background-color: #F2F2F2;
        }

        .bg-check {
            background-color: #ECF5FE;
        }


        .fa-solid {
            font-size: 1.9rem;
            margin: 10px !important;
        }

        .request-progress {
            font-size: 15px;
            border-radius: 40px;
        }

        .box {
            border: 1px solid #BDBDBD;
            min-height: 143px;
            height: 80%;
            max-width: 128px;
            width: 100%;
            box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);
            border-radius: 15px !important;
            margin: auto !important;
        }

        a {
            color: #170F49;
            font-size: 18px;
            font-weight: 500;
        }

        @media(max-width:768px) {
            .border-end {
                border-right: none !important;
            }
        }

    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            {{-- New Request --}}
            <div class="col-lg-9 border-end">

                <h2 class="text-center border-bottom p-2">{{ __('Request 2536') }}</h2>

                <div class="row justify-content-between text-center icons">
                    <div class="col-lg">
                        <i class="fa-solid fa-circle-check m-1 check"></i>
                        <div class="request-progress check bg-check">
                            {{ __('New Request') }}</div class="">
                    </div>

                    <div class="col-lg">
                        <i class="fa-solid fa-circle-check m-1 check"></i>
                        <div class="request-progress check bg-check">
                            {{ __('3 Quotations') }}</div class="">
                    </div>

                    <div class="col-lg">
                        <i class="fa-solid fa-circle-check m-1 check"></i>
                        <div class="request-progress check bg-check">
                            {{ __('Purchase Order') }}</div class="">
                    </div>


                    <div class="col-lg">
                        <i class="fa-solid fa-circle-check m-1 check"></i>
                        <div class="request-progress check bg-check">
                            {{ __('Pick Up') }}</div class="">
                    </div>

                    <div class="col-lg">
                        <i class="fa-solid fa-circle-check m-1 check"></i>
                        <div class="request-progress check bg-check">
                            {{ __('Delivered') }}</div class="">
                    </div>

                    <div class="col-lg">
                        <i class="fa-solid fa-circle-check m-1 un-check"></i>
                        <div class="request-progress un-check bg-uncheck">
                            {{ __('Invoice') }}</div class="">
                    </div>

                    <div class="col-lg">
                        <i class="fa-solid fa-circle-check m-1 un-check"></i>
                        <div class="request-progress un-check bg-uncheck">
                            {{ __('Paid') }}</div class="">
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-lg">
                        <div class="row pb-lg pb-3 justify-content-between">
                            <div class="pb-lg-2"><span class="input-title">{{ __('Client') }}</span></div>
                            <div class="input-sub-title">{{ __('Toyota') }}</div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="row justify-content-between">
                            <div class="col">
                                <div class="pb-lg-2"><span class="input-title">{{ __('PO No.') }}</span></div>
                                <div class="input-sub-title">{{ __('Pick Up') }}</div>
                            </div>
                            <div class="col">
                                <div class="pb--lg2"><span class="input-title">{{ __('Invoice No.') }}</span>
                                </div>
                                <div class="input-sub-title">{{ __('2016') }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md pb-3 pb-md">
                        <div class="pb-lg-2"><span class="input-title">{{ __('Vehicle name') }}</span></div>
                        <div class="input-sub-title">{{ __('Toyota') }}</div>
                    </div>
                    <div class="col-md pb-3 pb-md">
                        <div class="pb-lg-2"><span class="input-title">{{ __('Vehicle type') }}</span></div>
                        <div class="input-sub-title">{{ __('Pick Up') }}</div>
                    </div>
                    <div class="col-md pb-3 pb-md">
                        <div class="pb-lg-2"><span class="input-title">{{ __('Model') }}</span></div>
                        <div class="input-sub-title">{{ __('2016') }}</div>
                    </div>
                    <div class="col-md pb-3 pb-md">
                        <div class="pb-lg-2"><span class="input-title">{{ __('Plate No.') }}</span></div>
                        <div class="input-sub-title">{{ __('VAS 2671') }} </div>
                    </div>
                    <div class="col-md pb-3 pb-md">
                        <div class="pb-lg-2"><span class="input-title">{{ __('Chase No.') }}</span></div>
                        <div class="input-sub-title">{{ __('367784999499942') }}</div>
                    </div>
                </div>

                <div class="row pb-5 mt-5 border-bottom mx-auto">
                    <div class="col-lg text-center">
                        <div class="box border rounded"></div>
                        <a class="" href="#">{{ __('Request') }}</a>
                    </div>
                    <div class="col-lg text-center">
                        <div class="box border rounded  m-auto"></div>
                        <a class="" href="#">{{ __('Quotation 1') }}</a>
                    </div>

                    <div class="col-lg text-center">
                        <div class="box border rounded m-auto"></div>
                        <a class="" href="#">{{ __('Quotation 2') }}</a>
                    </div>

                    <div class="col-lg text-center">
                        <div class="box border rounded m-auto"></div>
                        <a class="" href="#">{{ __('Quotation 3') }}</a>
                    </div>
                    <div class="col-lg text-center">
                        <div class="box border rounded m-auto"></div>
                        <a class="" href="#">{{ __('Delivery Note') }}</a>
                    </div>
                    <div class="col-lg text-center">
                        <div class="box border rounded m-auto"></div>
                        <a class="" href="#">{{ __('Invoice') }}</a>
                    </div>
                </div>

                <div class="row text-center mt-5 justify-content-md-start justify-content-around">
                    <div class="col-lg-2">
                        <i class="fa-solid fa-circle-check m-1 check"></i>
                        <div class="request-progress bg-check check">
                            {{ __('Quotation') }}</div class="">
                    </div>

                    <div class="col-lg-2">
                        <i class="fa-solid fa-circle-check m-1 check"></i>
                        <div class="request-progress bg-check check">
                            {{ __('Invoice') }}</div class="">
                    </div>

                    <div class="col-lg-2">
                        <i class="fa-solid fa-circle-check m-1 un-check"></i>
                        <div class="request-progress bg-uncheck un-check">
                            {{ __('Paid') }}</div class="">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg">
                        <div class="row justify-content-between">
                            <div class="pb-2"><span class="input-title">{{ __('Store Name') }}</span>
                            </div>
                            <div class="input-sub-title">{{ __('Toyota') }}</div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="row justify-content-between">
                            <div class="col">
                                <div class="pb-2"><span class="input-title">{{ __('Quotation') }}</span>
                                </div>
                                <div class="input-sub-title">{{ __('Toyota') }}</div>
                            </div>
                            <div class="col">
                                <div class="pb-2"><span class="input-title">{{ __('Invoice No.') }}</span>
                                </div>
                                <div class="input-sub-title">{{ __('Toyota') }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- buttons --}}
                <div class="row align-items-baseline mt-5">
                    <div class="col-lg">
                        <div class="row">
                            <div class="col-lg text-center">
                                <div class="box border rounded"></div>
                                <a class="" href="#">{{ __('Store Quotation') }}</a>
                            </div>
                            <div class="col-lg text-center">
                                <div class="box border rounded"></div>
                                <a class="" href="#">{{ __('Purchase Invoice') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="d-flex flex-column flex-md-row justify-content-end align-items-end text-light">
                            <button type="reset" class="btn btn-danger m-2">
                                {{ __('Cancel') }}
                            </button>
                            <button type="submit" class="btn btn-primary m-2">
                                {{ __('Done') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Progress Report --}}
            <div class="col-md">
                <h2 class="border-bottom text-center p-2">{{ __('Progress Report') }}</h2>
            </div>
        </div>
    </div>
@endsection
