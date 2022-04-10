@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="rectangle py-4 px-4">
                    <div class="rec-text d-flex align-items-center" style="justify-content: space-between;">
                        <div class="text-white">
                            <h5 class="fw-bold">New Request</h5>
                            <span>Create a New Request</span>
                        </div>
                        <!-- <div> -->
                        <button class="btn btn-light py-3 px-3" style="border-radius: 10px; height:3rem; width:auto">
                            <i class="fa fa-plus fs-4 text-dark"></i>
                        </button>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 justify-content-between">
            <div class="col-lg mt-3">
                <div class="parts p-4">
                    <div class="h-100">
                        <h2>11</h2>
                        <p class="fs-5">New Requestes
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg mt-3">
                <div class="parts p-4">
                    <div class="h-100">
                        <h2>2</h2>
                        <p class="fs-5">On Progress</p>
                    </div>
                </div>
            </div>

            <div class="col-lg mt-3">
                <div class="parts p-4">
                    <div class="h-100">
                        <h2>4</h2>
                        <p class="fs-5">Under Delivery</p>
                    </div>

                </div>
            </div>

            <div class="col-lg mt-3">
                <div class="parts p-4">
                    <div class="h-100">
                        <h2>6</h2>
                        <p class="fs-5">Pending Payment</p>
                    </div>

                </div>
            </div>

            <div class="col-lg mt-3">
                <div class="parts p-4">
                    <div class="h-100">
                        <h2>16,000 SR</h2>
                        <p class="fs-5">Pending Amount</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md">
                <div class="btn-group same m.md mt-3">
                    <button class="btn btn-secondary dropdown-toggle py-3 px-5 ff-inter" type="button" id="defaultDropdown"
                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <i class="fa-solid fa-filter"></i> Filter
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

                <div class="btn-group same m.md mt-3">
                    <button class="btn btn-secondary dropdown-toggle py-3 px-5 ff-inter" type="button" id="defaultDropdown"
                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <i class="fa-solid fa-calendar"></i> Today
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">1 Action</a>
                        <a class="dropdown-item" href="#">1 Another action</a>
                        <a class="dropdown-item" href="#">1 Something else here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-2 mt-md-4">
            <div class="col-lg  mt-5 m-lg-0">
                <div class="p-4 h-100" style="background-color: #F5F5F5; border-radius: 10px">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-circle me-3" style="color: #5030E5; font-size: 8px;"></i>
                            <h5 class="ff-inter m-0"><span class="align-middle">
                                    To Do
                                </span>
                                <span class="badge ms-3 rounded-circle"
                                    style="background-color:#E0E0E0; color:#625F6D">4</span>
                            </h5>
                        </div>
                        <div>
                            <button class="fa fa-plus fs-4 p-1"
                                style="border-radius:7px; color:#5030E5; background-color: #5130e56b; border:none"></button>
                        </div>
                    </div>
                    <hr class="fw-bold" style="border: 2px solid #5030E5;">


                    <div class="mt-4 p-4" style="background-color:#FFFFFF; border-radius:10px">
                        <div class="ff-inter">
                            <div class="d-flex position-relative">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-circle me-3" style="color: #5030E5; font-size: 8px;"></i>
                                    <p class="m-1 ">Quotation</p>
                                </div>
                                <div class="position-absolute top-0 end-0 ">
                                    <p class="p-1"
                                        style="color: #D58D49; background-color: #dfa8749c; border-radius:5px; font-size: 12px;">
                                        Urgent
                                    </p>
                                </div>
                            </div>
                            <h4 h5 class="fw-bold fs-5">Request
                                No.2345</h4>

                            <div class="d-flex">
                                <p class="me-5" style="font-size: 12px;">
                                    Vechile Name</p>
                                <p style="font-size: 12px;">
                                    Type
                                </p>
                            </div>
                            <p style="font-size: 12px;">
                                Model
                            </p>
                            <div class="d-flex">
                                <p class="me-5" style="font-size: 12px;">PO
                                    Number</p>
                                <p class="ms-2" style="font-size: 12px;">
                                    Invoice Number</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-4" style="background-color:#FFFFFF; border-radius:10px">
                        <div class="ff-inter">
                            <div class="d-flex position-relative">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-circle me-3" style="color: #5030E5; font-size:8px"></i>
                                    <p class="m-1">Invoice</p>
                                </div>
                                <div class="position-absolute top-0 end-0 ">
                                    <p class="p-1"
                                        style="color: #D58D49; background-color: #dfa8749c; border-radius:5px; font-size: 12px;">
                                        Low
                                    </p>
                                </div>
                            </div>
                            <h4 h5 class="fw-bold fs-5">Request
                                No.2345</h4>

                            <div class="d-flex">
                                <p class="me-5" style="font-size: 12px;">
                                    Vechile Name</p>
                                <p style="font-size: 12px;">
                                    Type
                                </p>
                            </div>
                            <p style="font-size: 12px;">
                                Model
                            </p>
                            <div class="d-flex">
                                <p class="me-5" style="font-size: 12px;">PO
                                    Number</p>
                                <p class="ms-2" style="font-size: 12px;">
                                    Invoice Number</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-lg  mt-5 m-lg-0">
                <div class="p-4 h-100" style="background-color: #F5F5F5; border-radius: 10px">
                    <div class="d-flex mb-4">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-circle me-3" style="color: #FFA500; font-size: 8px"></i>
                            <h5 class="ff-inter m-0"><span class="align-middle">On Progress</span> <span
                                    class="badge ms-3 rounded-circle"
                                    style="background-color:#E0E0E0;color:#625F6D">3</span>
                            </h5>
                        </div>
                    </div>
                    <hr class="fw-bold" style="border:2px solid #FFA500">
                </div>
            </div>

            <div class="col-lg  mt-5 m-lg-0">
                <div class="p-4 h-100" style="background-color: #F5F5F5; border-radius: 10px">
                    <div class="d-flex mb-4">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-circle me-3" style="color: #76A5EA; font-size: 8px"></i>
                            <h5 class="ff-inter m-0">Done
                                <span class="badge ms-3 rounded-circle"
                                    style="background-color:#E0E0E0;color:#625F6D">2</span>
                            </h5>
                        </div>
                    </div>
                    <hr class="fw-bold" style="border: 2px solid #8BC48A">
                </div>
            </div>
        </div>
    </div>
@endsection
