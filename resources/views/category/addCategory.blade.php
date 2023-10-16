@extends('Backend.admin_master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
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
            <div class="errorMsg">

            </div>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      <div class="modal-body">
        <form>
            @csrf
          <div class="mb-3">
            <label for="InputCategory" class="col-form-label">Category name:</label>
            <input type="text" class="form-control" name="InputCategory"  id="InputCategory">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success addCategory" >Save</button>
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



$(document).ready(function() {
    $(document).on('click', '.addCategory', function(e) {
        e.preventDefault();
        var category = $('#InputCategory').val();

                        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });

        $.ajax({
            url: '{{ route("categoryStore") }}',
            method: 'post',
            data: { category: category },
            success: function(res) {
                // Your success callback code goes here
                console.log(res); // Just for debugging, remove in production
            },
            error: function(err) {
                let error = err.responseJSON;
                $.each(error.errors, function(index, value) {
                    $('.errorMsg').append('<span class="text-danger">' + value + '</span><br>'); // Corrected this line
                });
            }
        });
    });
});














</script>








@endsection

@endsection
