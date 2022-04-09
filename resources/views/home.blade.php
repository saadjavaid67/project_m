@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="rectangle py-4 px-5">
                 <div class="rec-text d-flex align-items-center" style="justify-content: space-between;">
                     <div class="text-white">
                         <h5>New Request</h5>
                         <h6>Create a New Request</h6>
                     </div>
                     <div class="">
                         <button class="btn btn-light py-3 px-4" style="border-radius: 10px;">
                             <i class="fa fa-plus fs-4"></i>     
                            </button>
                        </div>
                 </div>
            </div>
        </div>
    </div>
</div>

@endsection
