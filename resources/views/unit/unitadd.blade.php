@extends('Backend.admin_master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container">

    <div class="row">
        <div class="col-lg-6">
            <span>Unit</span>
        </div>

        <div class="col-lg-6">
            <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Unit add </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New Unit</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ url('unitadd') }}" method="POST" id="addunit">
                          @csrf
                        <div class="mb-3">
                          <label for="unitName" class="col-form-label">Unit name</label>
                          <input type="text" class="form-control" name="unit_name" id="unitName">
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



<div class="dropdown">
    <a class="dropdown-toggle" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
        <i class="flag-united-kingdom flag m-0"></i>
    </a>

    <ul class="dropdown-menu" aria-labelledby="Dropdown">
        <li>
            <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
        </li>
        <li><hr class="dropdown-divider" /></li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
        </li>
    </ul>
</div>





@endsection




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

</script>
@section('javascript')

<script>

$(document).ready(function(){

  $('#addunit').on('submit',function(event){

    event.preventDefault();

jQuery.ajax({
    url:"{{ url('unitadd') }}",
    data: jQuery('#addunit').serialize(),
    type:"post",
    success:function(data){


        jQuery('#addunit')[0].reset();
    }
})




  });

});

</script>











@endsection



