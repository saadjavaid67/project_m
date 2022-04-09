@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <div class="rectangle py-4 px-4">
                    <div class="rec-text d-flex align-items-center" style="justify-content: space-between;">
                        <div class="text-white">
                            <h5>New Request</h5>
                            <h6>Create a New Request</h6>
                        </div>
                        <!-- <div> -->
                        <button class="btn btn-light py-2 px-3" style="border-radius: 10px; height:3rem">
                            <i class="fa fa-plus fs-4"></i>
                        </button>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 justify-content-between">
            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-white d-flex flex-column">
                        <h4 class="fw-bold">11</h4>
                        <p>New Requestes</p>
                    </div>

                </div>
            </div>
            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-white d-flex flex-column">
                        <h4 class="fw-bold">2</h4>
                        <p>On Progress</p>
                    </div>

                </div>
            </div>

            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-white d-flex flex-column">
                        <h4 class="fw-bold">4</h4>
                        <p>Under Delivery</p>
                    </div>

                </div>
            </div>

            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-white d-flex flex-column">
                        <h4 class="fw-bold">6</h4>
                        <p>Pending Payment</p>
                    </div>

                </div>
            </div>

            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-white d-flex flex-column">
                        <h4 class="fw-bold">16,000 SR</h4>
                        <p>Pending Amount</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="d-flex">
                    <div class="dropdown me-1">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdownMenuOffset"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                            <i class="fa-solid fa-filter"></i> Filter
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                        </ul>
                    </div>
                    <div class="dropdown me-1">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdownMenuOffset"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                            <i class="fa-solid fa-calendar"></i> Today
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
