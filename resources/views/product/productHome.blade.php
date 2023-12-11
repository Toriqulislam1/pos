@extends('Backend.admin_master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="row">

                    <div class="col-lg-9">
                        <div class="row">
                            <form action="" class="d-flex">
                                <div class="col-lg-6">
                                    <div class="input-group rounded">
                                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                        <span class="input-group-text border-0" id="search-addon">
                                          <i class="fas fa-search"></i>
                                        </span>
                                      </div>
                                </div>
                                <div class="col-lg-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                </div>
                                <div class="col-lg-2">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="col-lg-3 text-lg-right ">
                        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                            <i class="fa-solid fa-plus"></i>Category add
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <ul class="list-group list-group-flush">
        <li class="list-group-item">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
            <a href="#"><i class="fa-solid fa-pencil"></i></a>
            <a href="#"><i class="fa-solid fa-eye-slash"></i></a>
            <a href="#"><i class="fa-solid fa-barcode"></i></a>
            <a href="#"><i class="fa-solid fa-trash"></i></a>
        </div>
    </div>

</div>











@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

</script>
@section('javascript')

<script>
    $(document).ready(function() {

        $('#addCategory').on('submit', function(event) {
            event.preventDefault();
            jQuery.ajax({
                url: "{{ url('/categpry/store') }}"
                , data: jQuery('#addCategory').serialize()
                , type: "post"
                , success: function(data) {
                    console.log('Data added successfully:', data);
                    $('.table').load(location.href+' .table');
                    jQuery('#addCategory')[0].reset();

                }
            })

        });

    });

</script>

@endsection

