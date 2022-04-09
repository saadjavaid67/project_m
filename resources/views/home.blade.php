@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-3">
                <div class="rectangle py-4 px-4">
                    <div class="rec-text d-flex align-items-center" style="justify-content: space-between;">
                        <div class="text-white">
                            <h5>New Request</h5>
                            <h6>Create a New Request</h6>
                        </div>
                        <!-- <div> -->
                        <button class="btn btn-light py-3 px-3" style="border-radius: 10px; height:3rem; width:auto">
                            <i class="fa fa-plus fs-4" style="color: black"></i>
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
                    <div class="text-dark d-flex flex-column">
                        <h4 class="fw-bold">11</h4>
                        <p>New Requestes</p>
                    </div>

                </div>
            </div>
            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-dark d-flex flex-column">
                        <h4 class="fw-bold">2</h4>
                        <p>On Progress</p>
                    </div>

                </div>
            </div>

            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-dark d-flex flex-column">
                        <h4 class="fw-bold">4</h4>
                        <p>Under Delivery</p>
                    </div>

                </div>
            </div>

            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-dark d-flex flex-column">
                        <h4 class="fw-bold">6</h4>
                        <p>Pending Payment</p>
                    </div>

                </div>
            </div>

            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-dark d-flex flex-column">
                        <h4 class="fw-bold">16,000 SR</h4>
                        <p>Pending Amount</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col ">
                <div class="btn-group same">
                    <button class="btn btn-secondary dropdown-toggle py-3 px-5" type="button" id="defaultDropdown"
                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <i class="fa-solid fa-filter"></i> Filter
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                    </ul>
                </div>

                <div class="btn-group same">
                    <button class="btn btn-secondary dropdown-toggle py-3 px-5" type="button"
                        id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside"
                        aria-expanded="false">
                        <i class="fa-solid fa-calendar"></i> Today
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4" style="">
            <div class="col-4">
                <div class="p-4 h-100" style="background-color: #F5F5F5; border-radius: 10px">
                    <div class="d-flex position-relative">
                        <div class="d-flex align-items-baseline">
                            <i class="fa-solid fa-circle me-3" style="color: #5030E5"></i>
                            <h5>To Do <span class="badge"
                                    style="border-radius: 50%; background-color:#625f6db2;">4</span>
                            </h5>
                        </div>
                        <div class="">
                            <i class="fa fa-plus fs-4 p-1 position-absolute top-0 end-0"
                                style="border-radius:7px; color: black; color:#5030E5; background-color: #5130e596"></i>
                        </div>
                    </div>
                    <hr class="fw-bold" style="border: 2px solid #5030E5">

                    <div class="mt-4 p-4" style="background-color:#FFFFFF; border-radius:10px">
                        <div>
                            <div class="d-flex position-relative">
                                <div class="d-flex align-items-baseline">
                                    <i class="fa-solid fa-circle me-3" style="color: #5030E5"></i>
                                    <h4>Quotation</h4>
                                </div>
                                <div class="position-absolute top-0 end-0 " style="">
                                    <p class="p-1"
                                        style="color: #D58D49; background-color: #dfa8749c; border-radius:5px">Urgent</p>
                                </div>
                            </div>
                            <h4 class="fw-bold">Request No.2345</h4>

                            <div class="d-flex">
                                <p class="me-5">Vechile Name</p>
                                <p>Vechile Type</p>
                            </div>
                            <p>Model</p>
                            <div class="d-flex">
                                <p class="me-5">PO Number</p>
                                <p class="ms-2">Invoice Number</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-4" style="background-color:#FFFFFF; border-radius:10px">
                        <div>
                            <div class="d-flex position-relative">
                                <div class="d-flex align-items-baseline">
                                    <i class="fa-solid fa-circle me-3" style="color: #5030E5"></i>
                                    <h4>Invoice</h4>
                                </div>
                                <div class="position-absolute top-0 end-0 " style="">
                                    <p class="p-1"
                                        style="color: #D58D49; background-color: #dfa8749c; border-radius:5px">Low </p>
                                </div>
                            </div>
                            <h4 class="fw-bold">Request No.2345</h4>

                            <div class="d-flex">
                                <p class="me-5">Vechile Name</p>
                                <p>Vechile Type</p>
                            </div>
                            <p>Model</p>
                            <div class="d-flex">
                                <p class="me-5">PO Number</p>
                                <p class="ms-2">Invoice Number</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-4">
                <div class="p-4 h-100" style="background-color: #F5F5F5; border-radius: 10px">
                    <div class="d-flex position-relative">
                        <div class="d-flex align-items-baseline">
                            <i class="fa-solid fa-circle me-3" style="color: #FFA500"></i>
                            <h5>On Progress <span class="badge"
                                    style="border-radius: 50%; background-color:#625f6db2;">3</span>
                            </h5>
                        </div>
                    </div>
                    <hr class="fw-bold" style="border: 2px solid #FFA500">
                </div>
            </div>

            <div class="col-4">
                <div class="p-4 h-100" style="background-color: #F5F5F5; border-radius: 10px">
                    <div class="d-flex position-relative">
                        <div class="d-flex align-items-baseline">
                            <i class="fa-solid fa-circle me-3" style="color: #76A5EA"></i>
                            <h5>On Progress <span class="badge"
                                    style="border-radius: 50%; background-color:#625f6db2;">2</span>
                            </h5>
                        </div>
                    </div>
                    <hr class="fw-bold" style="border: 2px solid #8BC48A">
                </div>
            </div>
        </div>
    </div>
@endsection
