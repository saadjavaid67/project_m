@extends('layouts.app')

@push('css')
    <style>

    </style>
@endpush

@section('content')
    <div class="container mt-4">

        <div class="row text-center border-bottom pb-2 mb-5">
            <h2 class="page-title">{{ __('New Request') }}</h2>
        </div>

        {{-- form --}}
        <form class="form-group" action="" class="row">
            <div class="row">
                <div class="col"><span class="input-title">Client</span><input type="text" class="input-group"
                        required></div>
            </div>

            <div class="row mt-1 mt-md-3">
                <div class="col-md-3"><span class="input-title">Request No.</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-3"><span class="input-title">Vehicle/Garage</span><input type="text"
                        class="input-group"></div>
            </div>
            <div class="row mt-1 mt-md-3">
                <div class="col-md-4"><span class="input-title">Vehicle name</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-4"><span class="input-title">Vehicle type</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-4"><span class="input-title">Model</span><input type="text"
                        class="input-group"></div>
            </div>

            <div class="row mt-1 mt-md-3">
                <div class="col-md-4"><span class="input-title">Plate No.</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-4"><span class="input-title">Chase No.</span><input type="text"
                        class="input-group"></div>
            </div>

            <div class="row mt-1 mt-md-3">
                <div class="col"><span class="input-title">Item Name</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-2"><span class="input-title">Unit</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-2"><span class="input-title">Quantity</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-2">
                    <span><a href="#" style="color: #4A3AFF">+Add Item</a></span>
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
