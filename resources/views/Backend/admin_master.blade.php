<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('Backend/css/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('Backend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('Backend/css/js/main.js') }}">
  <title>POS Admin</title>
</head>

<body>

  </head>

  <body>

    <section class="layout-container-content d-flex flex-fill flex-column">
      <header role="heading" class="layout-header">
        <span>Logo</span>

        <div class="float-end">
          <a href="" class="text-dark decoration">
            <i class="fa fa-list"></i>
            Manage Purchase</a>
          <a href="" class="text-dark decoration ">
            <i class="fa fa-plus"></i>


            New Purchase

          </a>
          <a href="" class="text-dark text-decoration-none">
            <i class="fa fa-list"></i>
            Sell Invoice</a>
          <a href="" class="text-dark text-decoration-none">
            <i class="fa fa-plus"></i>
            Create Invoice</a>
          <a href="" class="text-dark text-decoration-none">

            Requisition </a>
          <a href="" class="text-dark text-decoration-none">

            <i class="fa fa-bell" aria-hidden="true"></i></a>

          <a href="" class="text-dark text-decoration-none">

            TO DO</a>

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
       




          <a href="" class="text-dark text-decoration-none">

            admin</a>
        </div>

      </header>

      <section class="d-flex flex-fill">

          </head>
          <body style="background-color:white;">


            @include('Backend.body.sidebar')




        <section class="d-flex flex-fill flex-column">

          <main role="main" class="layout-main flex-fill">

          </main>
          </head>

          <body>

        </section>
      </section>
    </section>


    @yield('javascript')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

</html>
