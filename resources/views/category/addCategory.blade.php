@extends('Backend.admin_master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6">
                        <span>Categories</span>
                    </div>
                    <div class="col-lg-6 text-lg-right ">
                        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                            <i class="fa-solid fa-plus"></i>Category add
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- details show category start --}}
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categoris as $key=>$category )
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            <a href="#"><i class="fa-solid fa-pencil"></i></a>
                            <a href="#"><i class="fa-solid fa-delete-left"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
  {{-- details show category end  --}}

        {{--  modal section start --}}
        <div class="col-lg-6">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Unit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/categpry/store') }}" method="POST" id="addCategory">
                                @csrf
                                <div class="mb-3">
                                    <label for="category" class="col-form-label">Category name</label>
                                    <input type="text" class="form-control" name="Category" id="category">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 {{--  modal section end --}}
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

