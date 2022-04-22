@extends('layouts.app')

@push('css')
    <style>
        .done {
            color: #17E383 !important;
        }

        .pending {
            color: #FF9548 !important;
        }

        .fa-square-full {
            font-size: 6px;
            color: #ededed;
        }

        th {
            font-size: 16px;
            color: #6B6F7B;
            font-weight: 500
        }

        .dropdown-elipsis {
            border: unset !important;
            padding: unset !important;
        }

    </style>
@endpush

@section('content')
    <div class="container mt-4 requests">
        <h1>Requests</h1>
        <div class="row justify-content-between  gap-2">
            {{-- searcbar --}}
            <div class="col-lg-2">
                <div class="d-flex mb-2 mb-md align-items-center border rounded w-100">
                    <a class="text-dark" href="#">
                        <i class="fa-solid fa-search px-2"></i>
                    </a>
                    <input type="text" name="" id="" class="border-0 w-100" placeholder="Search for...">
                </div>
            </div>

            {{-- plug & play --}}
            <div class="col-lg">
                <div class="dropdown">
                    <button
                        class="btn btn-white border dropdown-toggle d-flex justify-content-between align-items-center px-2"
                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="px-2">Plug & Play</span>
                        <img class="filter-icon border-start pe-1" src="..\assets\icons\plug.png" alt="">

                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </div>
            </div>

            {{-- employee --}}
            <div class="col-lg">
                <div class="dropdown">
                    <button
                        class="btn btn-white border dropdown-toggle d-flex justify-content-between align-items-center px-2"
                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="px-2">Employee</span>
                        <img class="filter-icon border-start pe-1" src="..\assets\icons\employee.png" alt="">

                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Employee 1</a></li>
                        <li><a class="dropdown-item" href="#">Employee 2</a></li>
                        <li><a class="dropdown-item" href="#">Employee 3</a></li>
                    </ul>
                </div>
            </div>

            {{-- status --}}
            <div class="col-lg">
                <div class="dropdown">
                    <button
                        class="btn btn-white border dropdown-toggle d-flex justify-content-between align-items-center px-2"
                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="px-2">Status</span>
                        <img class="filter-icon border-start pe-1" src="..\assets\icons\status.png" alt="">

                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Brand New</a></li>
                        <li><a class="dropdown-item" href="#">Used</a></li>
                    </ul>
                </div>
            </div>

            {{-- type --}}
            <div class="col-lg">
                <div class="dropdown">
                    <button
                        class="btn btn-white border dropdown-toggle d-flex justify-content-between align-items-center px-2"
                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="px-2">Type</span>
                        <img class="filter-icon border-start pe-1" src="..\assets\icons\type-filter.png" alt="">

                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Regular</a></li>
                        <li><a class="dropdown-item" href="#">Truck</a></li>
                    </ul>
                </div>
            </div>


            {{-- type --}}
            <div class="col-lg ms-xlg-5">
                <div class="d-flex align-items-center">
                    <div class="col-11">
                        <div class="dropdown">
                            <button
                                class="btn btn-white border dropdown-toggle d-flex justify-content-between align-items-center px-2"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="px-2">Sort by</span>
                                <img class="filter-icon border-start pe-1" src="..\assets\icons\btn-down.png" alt="">

                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Price</a></li>
                                <li><a class="dropdown-item" href="#">Model</a></li>
                                <li><a class="dropdown-item" href="#">Color</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col ms-lg-1 ms-sm-4">
                        <a href="#" class="">
                            <i class="fa-solid fa-circle-arrow-down fa-2xl"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        {{-- table --}}
       <div class="container table-responsive">
        <table class="table mt-5">
            <thead>
                <th><input type="checkbox" name="" id=""></th>
                <th>Request No.</th>
                <th class="text-center">Date</th>
                <th>Client</th>
                <th class="text-center">Vehicel Name</th>
                <th class="text-center">No. Plate</th>
                <th class="text-center">PO No.</th>
                <th class="text-center">Invoice No.</th>
                <th class="text-center">Status</th>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td class="fw-bold">8943</td>
                    <td class="text-center fw-bold">Jan 2,2022</td>
                    <td>
                        <div class="d-flex flex-column">
                            <span class="fw-bold">Itai Bracha</span>
                            <span>Itai Bracha31@gmail.com</span>
                        </div>
                    </td>
                    <td class="fw-bold text-center">Haundai</td>
                    <td class="fw-bold text-center">SHA 121</td>
                    <td class="fw-bold text-center">78399928112</td>
                    <td class="fw-bold text-center">MA/1001</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-column text-center ps-5">
                                <div class="fw-bold done">Done</div>
                                <div class="d-flex justify-content-between gap-1">
                                    <i class="fa-solid fa-square-full done"></i>
                                    <i class="fa-solid fa-square-full done"></i>
                                    <i class="fa-solid fa-square-full done"></i>
                                    <i class="fa-solid fa-square-full"></i>
                                    <i class="fa-solid fa-square-full"></i>
                                    <i class="fa-solid fa-square-full"></i>
                                    <i class="fa-solid fa-square-full"></i>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="dropdown">
                                    <button
                                        class="btn btn-white dropdown-toggle d-flex justify-content-between align-items-center"
                                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">option</a></li>
                                        <li><a class="dropdown-item" href="#">option</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td class="fw-bold">7839</td>
                    <td class="text-center fw-bold">Jan 2,2022</td>
                    <td>
                        <div class="d-flex flex-column">
                            <span class="fw-bold">Itai Bracha</span>
                            <span>Itai Bracha31@gmail.com</span>
                        </div>
                    </td>
                    <td class="fw-bold text-center">Hilux</td>
                    <td class="fw-bold text-center">UJH 7389</td>
                    <td class="fw-bold text-center">9087655567</td>
                    <td class="fw-bold text-center">MA/1004</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-column text-center ps-5">
                                <div class="fw-bold pending">Pending</div>
                                <div class="d-flex justify-content-between gap-1">
                                    <i class="fa-solid fa-square-full"></i>
                                    <i class="fa-solid fa-square-full"></i>
                                    <i class="fa-solid fa-square-full"></i>
                                    <i class="fa-solid fa-square-full"></i>
                                    <i class="fa-solid fa-square-full"></i>
                                    <i class="fa-solid fa-square-full"></i>
                                    <i class="fa-solid fa-square-full"></i>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="dropdown">
                                    <button
                                        class="btn btn-white dropdown-toggle d-flex justify-content-between align-items-center"
                                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">option</a></li>
                                        <li><a class="dropdown-item" href="#">option</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
       </div>
    </div>


    </div>
@endsection
