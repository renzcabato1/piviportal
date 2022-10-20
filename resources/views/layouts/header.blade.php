<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Holdings, Construction Company, Shipping, Logistics, Ship Building" name="keywords">
	<meta content="Premium Infinite Ventures" property="og:title">
	<meta content="Holdings, Construction Company, Shipping, Logistics, Ship Building" property="og:description">
	<meta content="img/companies/PIVI_FINAL_PNG-02.png" property="og:image">
	<meta content="https://app.pivi.com.ph/" property="og:url">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/horizontal-layout-light/style.css">
    <!-- endinject -->
    <link rel="icon" type="image/png" href="{{ asset('img/companies/PIVI_FINAL_PNG-02.png')}}" />

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('vendors/owl-carousel-2/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendors/owl-carousel-2/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
    <style>
      /* width */
      ::-webkit-scrollbar {
        width: 5px;
      }
      
      /* Track */
      ::-webkit-scrollbar-track {
        background: #f1f1f1; 
      }
       
      /* Handle */
      ::-webkit-scrollbar-thumb {
        background: #aee1f5; 
      }
      
      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
        background: #2596be; 
      }
      .loader {
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background: url("{{ asset('/images/3.gif')}}") 50% 50% no-repeat white ;
          opacity: .8;
          background-size:120px 120px;
      }
    </style>
</head>
<body>
    <div id = "loader" style="display:none;" class="loader">
    </div>
    <div class="container-scroller">
        <!-- partial:../../partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
          <nav class="navbar top-navbar p-0">
            <div class="container d-flex align-items-center justify-content-center">
              <div class="text-center navbar-brand-wrapper  ">
                <a class="navbar-brand brand-logo" href="{{url('/')}}"><img src="img/companies/pivi-1.png" alt="logo"/> Premium Infinite Ventures Inc.</a>
                <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="img/companies/pivi-1.png" alt="logo"/></a>
              </div>
            </div>
          </nav>
        </div>
    @yield('content')

</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script>
    function show() {
                document.getElementById("loader").style.display="block";
    }
</script>
<script src="vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->

<script src="vendors/datatables.net/jquery.dataTables.js"></script>
<script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<script src="js/settings.js"></script>
<script src="js/todolist.js"></script>
@yield('footer')
<!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/owl-carousel.js"></script>
  <!-- End custom js for this page-->
<script>
   function myFunction() {

        var input = document.getElementById("Search");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('target');

        for (i = 0; i < nodes.length; i++) {
            if (nodes[i].innerText.toLowerCase().includes(filter)) {
                nodes[i].style.display = "";
            } else {
                nodes[i].style.display = "none";
            }
        }
    }
    function myFunction1() {

    var input = document.getElementById("Search1");
    var filter = input.value.toLowerCase();
    var nodes = document.getElementsByClassName('target1');

    for (i = 0; i < nodes.length; i++) {
        if (nodes[i].innerText.toLowerCase().includes(filter)) {
            nodes[i].style.display = "";
        } else {
            nodes[i].style.display = "none";
        }
    }
    }
</script>

@include('sweetalert::alert')
</body>
</html>
