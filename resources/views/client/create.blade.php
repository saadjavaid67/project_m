@extends('layouts.app')

@push('css')
    <style>
        @keyframes append-animate {
            from {
                transform: translateY(-80px);
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* animate new box */
        .item-transition {
            animation: append-animate 1s cubic-bezier(0.075, 0.82, 0.165, 1);
        }

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
                <div class="col"><span class="input-title">Company Name</span><input type="text"
                        class="input-group" required autofocus></div>
            </div>
            <div class="row mt-1 mt-md-3">
                <div class="col-md-4"><span class="input-title">Number</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-4"><span class="input-title">Alternative No.</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-4"><span class="input-title">E-mail</span><input type="text"
                        class="input-group"></div>
            </div>

            <div class="row mt-1 mt-md-3">
                <div class="col-md-3"><span class="input-title">Country</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-3"><span class="input-title">Province</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-3"><span class="input-title">City</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-3"><span class="input-title">Zip Code</span><input type="text"
                        class="input-group"></div>
            </div>

            <div id="items_container">
                <div class="row mt-1 mt-md-3">
                    <div class="col"><span class="input-title">Address</span><input type="text"
                            class="input-group"></div>
                    <div class="col-md-4"><span class="input-title">Vat No</span><input type="text"
                            class="input-group"></div>
                </div>
            </div>

            <p class="input-title mt-4">Google Map Location</p>
            <div class="row mt-2 row-height">
                <div class="col-md-3">
                    <div class="py-5  px-2 h-100 me-md-5 m-0 dba">

                    </div>
                </div>

                <div class="col-md"></div>

                <div class="col-md-3 text-center">
                    <div class="py-5 mx-auto mt-xs-2 m-0 dba box-style mb-3">

                    </div>
                    <a href="#" style="color: #170F49;" class="fw-bold">Attach VAT Certificate Pdf</a>
                </div>
                <div class="col-md-2 text-center">
                    <div class="py-5 mx-auto mt-xs-2 m-0 dba box-style mb-3">

                    </div>
                    <a href="#" style="color: #170F49;" class="fw-bold">Attatch C.R Pdf</a>
                </div>
            </div>

            {{-- buttons --}}
            <div class="row mt-4">
                <div class="col">
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
@push('js')
    <script>
        $(document).ready(function() {
            $('#add_item_btn').on('click', function() {
                $('#items_container').append(
                    "<div class='row mt-1 mt-md-3 item-transition'><div class='col'><span class='input-title'>Item Name</span><input type='text'class='input-group'></div><div class='col-md-2'><span class='input-title'>Unit</span><input type='text'class='input-group'></div><div class='col-md-2'><span class='input-title'>Quantity</span><input type='text'class='input-group'></div><div class='col-md-2'></div></div>"
                );
            })

        });

        async function fire_upload_swal() {
            const {
                value: file
            } = await Swal.fire({
                title: 'Select image',
                input: 'file',
                inputAttributes: {
                    'accept': 'image/*',
                    'aria-label': 'Upload your profile picture'
                }
            })

            if (file) {
                const reader = new FileReader()
                reader.onload = (e) => {
                    Swal.fire({
                        title: 'Your uploaded picture',
                        imageUrl: e.target.result,
                        imageAlt: 'The uploaded picture'
                    })
                }
                reader.readAsDataURL(file)
            }
        }
    </script>
@endpush
