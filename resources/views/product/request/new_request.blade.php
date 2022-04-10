@extends('layouts.app')

@push('css')
    <style>
        @keyframes append-animate {
            from {
                transform: scale(0);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* animate new box */
        .item-transition {
            animation: append-animate .3s linear;
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
                <div class="col"><span class="input-title">Client</span><input type="text" class="input-group"
                        required autofocus></div>
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

            <div id="items_container">
                <div class="row mt-1 mt-md-3">
                    <div class="col"><span class="input-title">Item Name</span><input type="text"
                            class="input-group"></div>
                    <div class="col-md-2"><span class="input-title">Unit</span><input type="text"
                            class="input-group"></div>
                    <div class="col-md-2"><span class="input-title">Quantity</span><input type="text"
                            class="input-group"></div>
                    <div class="col-md-2">
                        <span><a href="javascript:void(0)" id="add_item_btn" style="color: #4A3AFF">+Add Item</a></span>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <span><a href="javascript:void(0)" onclick="fire_upload_swal()" style="color: #170F49;">Attach Request Pdf</a></span>
                </div>

                {{-- buttons --}}
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
