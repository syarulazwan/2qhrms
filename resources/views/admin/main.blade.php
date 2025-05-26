<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>Human Resources System Management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  </head>
  <style>
    .breadcrumb {
        display: flex;
        justify-content: flex-start !important;
        align-items: center;
        padding: 0;
        margin: 0;
        list-style: none;
        background-color: transparent;
        font-family: Roboto, sans-serif;
    }

    .page-title {
        background-color: #ffffff00 !important;
    }

  </style>
  <body>
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      @include('admin.layout.header')
      <div class="page-body-wrapper">
        @include('admin.layout.sidebar')
        <br>
        <div class="page-body panding">
          @yield('pages') 
        </div>
         @include('admin.layout.footer') 
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/js/header-slick.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/raphael.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/morris.js') }}"> </script>
    <script src="{{ asset('assets/js/chart/morris-chart/prettify.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/dashboard/default.js') }}"></script> --}}
    <!-- <script src="{{ asset('assets/js/notify/index.js') }}"></script> -->
    {{-- <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom1.js') }}"></script> --}}
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl-custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script> --}}

    @stack('scripts')

    <script>

      const sidebar = document.querySelector('.sidebar-wrapper');
      const pageBody = document.querySelector('.page-body'); // Pilih elemen page-body

      // Tambah event listener untuk klik pada sidebar
      sidebar.addEventListener('click', () => {
          // Semak jika elemen sidebar mempunyai kelas close_icon
          if (sidebar.classList.contains('close_icon')) {
              // Jika ada kelas close_icon, buang kelas sidebar-width
              sidebar.classList.remove('sidebar-width');

              // Buang kelas panding pada page-body
              if (pageBody) {
                  pageBody.classList.remove('panding');
              }
          } else {
              // Jika tiada kelas close_icon, tambah kelas sidebar-width
              sidebar.classList.add('sidebar-width');

              // Tambah kelas panding pada page-body
              if (pageBody) {
                  pageBody.classList.add('panding');
              }
          }
      });

     function handleSidebar() {
        const sidebar = document.querySelector('.sidebar-width') || document.querySelector('.sidebar'); 
        const pageBody = document.querySelector('.page-body'); 
        // kalau dah remove sidebar-width, cari class lain sebagai fallback

        if (!sidebar) return;

        if (window.innerWidth <= 768) {
            sidebar.classList.remove('sidebar-width');
            pageBody.classList.remove('panding');
        } else {

      sidebar.classList.add('sidebar-width')
            void sidebar.offsetWidth; // force reflow supaya CSS detect perubahan
        }
    }

    window.addEventListener('load', handleSidebar);
    window.addEventListener('resize', handleSidebar);

    </script>

  </body>
</html>
