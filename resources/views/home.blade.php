@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-3">
                <div class="rectangle py-4 px-4">
                    <div class="rec-text d-flex align-items-center" style="justify-content: space-between;">
                        <div class="text-white" style="font-family: Poppins;">
                            <h5 style="font-weight:600; font-size:18px">New Request</h5>
                            <h6 style="font-weight:400; font-size:14px">Create a New Request</h6>
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
                        <h4 style="font-weight:600; font-size:32px;font-style:normal;">11</h4>
                        <p style="font-family: 'Poppins';font-weight:400; font-size:18px; font-style:normal">New Requestes
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-dark d-flex flex-column">
                        <h4 style="font-weight:600; font-size:32px;font-style:normal;">2</h4>
                        <p style="font-weight:400; font-size:18px;font-style:normal">On Progress</p>
                    </div>

                </div>
            </div>

            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-dark d-flex flex-column">
                        <h4 class="fw-bold" style="font-weight:600; font-size:32px;font-style:normal;">4</h4>
                        <p style="font-weight:400; font-size:18px;font-style:normal">Under Delivery</p>
                    </div>

                </div>
            </div>

            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-dark d-flex flex-column">
                        <h4 style="font-weight:600; font-size:32px;font-style:normal;">6</h4>
                        <p style="font-weight:400; font-size:18px;font-style:normal">Pending Payment</p>
                    </div>

                </div>
            </div>

            <div class="col-md">
                <div class="parts py-4 px-4">
                    <div class="text-dark d-flex flex-column">
                        <h4 class="fw-bold" style="font-weight:600; font-size:32px;font-style:normal;">16,000 SR</h4>
                        <p style="font-weight:400; font-size:18px;font-style:normal">Pending Amount</p>
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
                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"
                        style="font-family: 'Inter';                                                                                                                                                        font-style: normal; font-weight: 500; font-size: 16px;">
                        <i class="fa-solid fa-filter"></i> Filter
                    </button>
                </div>

                <div class="btn-group same">
                    <button class="btn btn-secondary dropdown-toggle py-3 px-5" type="button" id="defaultDropdown"
                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"
                        style="font-family: 'Inter';                                                                                                                                                        font-style: normal; font-weight: 500; font-size: 16px;">
                        <i class="fa-solid fa-filter"></i> Today
                    </button>
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
                            <h5 style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 16px;">To Do
                                <span class="badge"
                                    style="border-radius: 50%; background-color:#625f6db2;">4</span>
                            </h5>
                        </div>
                        <div>
                            <button class="fa fa-plus fs-4 p-1 position-absolute top-0 end-0"
                                style="border-radius:7px; outline:none; color:#5030E5; background-color: #5130e56b; border:1px solid #5130e56b"></button>
                        </div>
                    </div>
                    <hr class="fw-bold" style="border: 2px solid #5030E5">

                    <div class="mt-4 p-4" style="background-color:#FFFFFF; border-radius:10px">
                        <div>
                            <div class="d-flex position-relative">
                                <div class="d-flex align-items-baseline">
                                    <i class="fa-solid fa-circle me-3" style="color: #5030E5"></i>
                                    <h4 style="font-family:inter; font-weight:500; font-size:16px;">Quotation</h4>
                                </div>
                                <div class="position-absolute top-0 end-0 " style="">
                                    <p class="p-1"
                                        style="color: #D58D49; background-color: #dfa8749c; border-radius:5px; font-family: 'Inter';
                                                                                                                                                                            font-weight: 500; font-size: 12px;">
                                        Urgent
                                    </p>
                                </div>
                            </div>
                            <h4 style="font-family:inter; font-weight:600; font-size:18px;">Request
                                No.2345</h4>

                            <div class="d-flex">
                                <p class="me-5"
                                    style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 12px;">
                                    Vechile Name</p>
                                <p>Vechile Type</p>
                            </div>
                            <p style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 12px;">Model</p>
                            <div class="d-flex">
                                <p class="me-5"
                                    style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 12px;">PO
                                    Number</p>
                                <p class="ms-2"
                                    style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 12px;">
                                    Invoice Number</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-4" style="background-color:#FFFFFF; border-radius:10px">
                        <div>
                            <div class="d-flex position-relative">
                                <div class="d-flex align-items-baseline">
                                    <i class="fa-solid fa-circle me-3" style="color: #5030E5"></i>
                                    <h4
                                        style="font-family: 'Inter';font-style: normal;font-weight: 500;
                                                                                                                                                            font-size: 16px;">
                                        Invoice</h4>
                                </div>
                                <div class="position-absolute top-0 end-0 " style="">
                                    <p class="p-1"
                                        style="color: #D58D49; background-color: #dfa8749c; border-radius:5px; font-family: 'Inter';
                                                                                                                                                font-style: normal; font-weight: 500; font-size: 12px;">
                                        Low
                                    </p>
                                </div>
                            </div>
                            <h4 class="fw-bold"
                                style="font-family: 'Inter'; font-style: normal;font-weight: 600;font-size: 18px;">Request
                                No.2345</h4>

                            <div class="d-flex">
                                <p class="me-5"
                                    style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 12px;">
                                    Vechile Name</p>
                                <p
                                    style="font-family: 'Inter';
                                                                                                            font-style: normal;font-weight: 400;font-size: 12px;">
                                    Type
                                </p>
                            </div>
                            <p
                                style="font-family: 'Inter';
                                                                                                            font-style: normal;font-weight: 400;font-size: 12px;">
                                Model
                            </p>
                            <div class="d-flex">
                                <p class="me-5"
                                    style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 12px;">PO
                                    Number</p>
                                <p class="ms-2"
                                    style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 12px;">
                                    Invoice Number</p>
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
                            <h5 style="font-family: 'Inter'; font-style: normal; font-weight: 500; font-size: 16px;">On
                                Progress <span class="badge"
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
                            <h5 style="font-family: 'Inter'; font-style: normal; font-weight: 500; font-size: 16px;">Done
                                <span class="
                                badge"
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
