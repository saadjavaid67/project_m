@extends('layouts.app')
@push('css')
    <style>

    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row text-center border-bottom">
            <h2>{{ __('New Request') }}</h2>
        </div>
       {{-- <div class="card"> --}}
        <form class="form-group" action="" class="row">

            <p class="lead mt-3">
                {{ __('Supplier') }}
            </p>

            <select class="form-select" aria-label="Default select example">
                <option selected>Select Supplier</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <div class="row mt-3">
                <div class="col-md-3"><span class="input-title">Request No.</span><input type="text" class="input-group"></div>
                <div class="col-md-3"><span class="input-title">Vehicle/Garage</span><input type="text" class="input-group"></div>
            </div>

            <div class="row mt-3">
                <div class="col-md-4"><span class="input-title">Vehicle name</span><input type="text" class="input-group"></div>
                <div class="col-md-4"><span class="input-title">Vehicle type</span><input type="text" class="input-group"></div>
                <div class="col-md-4"><span class="input-title">Model</span><input type="text" class="input-group"></div>
            </div>

            <div class="row mt-3">
                <div class="col-md-4"><span class="input-title">Plate No.</span><input type="text" class="input-group"></div>
                <div class="col-md-4"><span class="input-title">Chase No.</span><input type="text" class="input-group"></div>
            </div>

            <div class="row mt-3">
                <div class="col"><span class="input-title">Item No.</span><input type="text" class="input-group"></div>
                <div class="col-md-1"><span class="input-title">Unit</span><input type="text" class="input-group"></div>
                <div class="col-md-1"><span class="input-title">Quantity</span><input type="text" class="input-group"></div>
                <div class="col-md-1">
                    <a href="#" style="color: #4A3AFF">+Add Item</a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <a href="#" style="color: #170F49;">Attach Request Pdf</a>

                </div>
                <div class="col">
                    <div class="row justify-content-end text-light">
                        <div class="col-md-3">
                            <button class="btn btn-danger">
                                Cancel
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-primary">
                                Confirm
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
       </div>
    </div>
@endsection
