@extends('Backend.admin_master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container">

    <div class="row">
        <div class="col-lg-6">
            <span>tex</span>
        </div>

        <div class="col-lg-6">
            <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Unit add </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New tex</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ url('/tex/store') }}" method="POST" id="addtex">
                          @csrf
                        <div class="mb-3">
                          <label for="unitName" class="col-form-label">Tex title</label>
                          <input type="text" class="form-control" name="title" id="unitName">
                        </div>
                        <div class="mb-3">
                            <label for="unitName" class="col-form-label">Tex</label>
                            <input type="number" class="form-control" name="tex" id="unitName">
                          </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit"  class="btn btn-primary">Add</button>
                    </div>
                </form>
                  </div>
                </div>
              </div>
        </div>

    </div>

</div>

@endsection

<script>

</script>
@section('javascript')

<script>

$(document).ready(function(){

  $('#addtex').on('submit',function(event){
    event.preventDefault();
        jQuery.ajax({
            url:"{{ url('/tex/store') }}",
            data: jQuery('#addtex').serialize(),
            type:"post",
            success:function(data){
            jQuery('#addtex')[0].reset();
            }
        })

    });

});

</script>

@endsection



