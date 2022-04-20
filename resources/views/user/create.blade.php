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
            <h2 class="page-title">{{ __('Add User') }}</h2>
        </div>

        {{-- form --}}
        <form class="form-group" action="" class="row">
            <div class="row">
                <div class="col"><span class="input-title">Company Name</span><input type="text"
                        class="input-group" required autofocus></div>
            </div>
            <div class="row mt-1 mt-md-3">
                <div class="col-md-4"><span class="input-title">Role</span><input type="text"
                        class="input-group"></div>
            </div>
            <div class="row mt-1 mt-md-3">
                <div class="col-md-4"><span class="input-title">Name</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-4"><span class="input-title">Number</span><input type="text"
                        class="input-group"></div>
                <div class="col-md-4"><span class="input-title">E-mail</span><input type="text"
                        class="input-group"></div>
            </div>

            <div class="row mt-1 mt-md-3">
                <div class="col-md-4"><span class="input-title">Username</span><input type="text"
                        class="input-group"></div>
            </div>

            <div id="items_container">
                <div class="row mt-1 mt-md-3">
                    <div class="col-md-4"><span class="input-title">Password</span><input type="text"
                            class="input-group"></div>
                    <div class="col-md-4"><span class="input-title">Repeat Password</span><input type="text"
                            class="input-group"></div>
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
