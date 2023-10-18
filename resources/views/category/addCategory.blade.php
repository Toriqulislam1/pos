@extends('Backend.admin_master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container">

    <div class="row">
        <div class="col-lg-6">
            <span>Categories</span>

        </div>
        <div class="col-lg-6">
            <button class="btn btn-primary float-end" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add category</button>
        </div>

    </div>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Category add</h5>


            </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('ajaxupload') }}" method="POST" id="addPost">
            @csrf
          <div class="mb-3">
            <label for="InputCategory" class="col-form-label">Category name:</label>
            <input type="text" class="form-control" name="Category"  id="InputCategory">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success " >Save</button>
      </div>
    </form>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

</script>
@section('javascript')

<script>

$(document).ready(function(){

    $('#addPost').on('submit',function(event){

        event.preventDefault();

        jQuery.ajax({
            url:"{{ url('ajaxupload') }}",
            data: jQuery('#addPost').serialize(),
            type:"post",
            success:function(data){


                jQuery('#addPost')[0].reset();
            }
        })

    });

});

</script>








@endsection

@endsection
