<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Encrypted CSRF token for Laravel, in order for Ajax requests to work --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>
      {{ isset($title) ? $title.' :: '.config('backpack.base.project_name').' Admin' : config('backpack.base.project_name').' Admin' }}
    </title>

    @yield('before_styles')

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <!-- <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

    <!-- <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/AdminLTE.min.css"> -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <!-- <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/skins/_all-skins.min.css"> -->

    <!-- <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/pace/pace.min.css"> -->
    <!-- <link rel="stylesheet" href="{{ asset('vendor/backpack/pnotify/pnotify.custom.min.css') }}"> -->

    <!-- BackPack Base CSS -->
    <link rel="stylesheet" href="{{ asset('css/material_dashboard/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material_dashboard/material-dashboard.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('vendor/backpack/demo.css') }}"> -->

    @yield('after_styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bootstrap-collapse">
  <app-my-app ng-version="5.2.0">
    <router-outlet></router-outlet>
      <app-layout>
        <div class="wrapper">
          @include('backpack::inc.sidebar')
          <div class="main-panel">
            <app-navbar-cmp>
              <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                  <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                      <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                          <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                          <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                      </button>
                    </div>
              			<a class="navbar-brand" href="https://texasbibleinstitute.org">TBI Admin Dashboard</a>
              		</div>


                  <div class="navbar-right">
                    @include('backpack::inc.menu')
                  </div>
                  <div class="collapse navbar-collapse justify-content-end" id="navigation">



            	    </div>
                </div>
              </nav>
            </app-navbar-cmp>

            <!-- Content Wrapper. Contains page content -->
            <div class="main-content">
              <div class="container-fliud">
                <div class="card">
                  <!-- Content Header (Page header) -->
                  <!-- <div class="card-header card-header" data-background-color="red">
                    <div class="card-title">

                    </div>

                  </div> -->
                  <!-- Main content -->
                  <!-- <div class="card-header card-header-icon" data-background-color="red">
                      <i class="material-icons">apps</i>
                  </div> -->
                  <div class="card-content">
                    @yield('header')

                    @yield('content')

                  </div>
                  <!-- /.content -->
                </div>
              </div>
            </div>
            <!-- /.content-wrapper -->



            <footer class="main-footer">
              <div class="container-fluid">
                  <nav class="pull-left">
                      <ul>
                          <li>
                              <a href="http://bmistaff.org">
                                  BMISTAFF
                              </a>
                          </li>
                          <li>
                              <a href="http://tbistudents.com">
                                  TBI STUDENTS
                              </a>
                          </li>
                          <li>
                              <a href="http://burchfield.org">
                                  BMI
                              </a>
                          </li>
                          <li>
                              <a href="http://thesource.cc">
                                  THE SOURCE
                              </a>
                          </li>
                      </ul>
                  </nav>
                  <p class="copyright pull-right">
                      ©
                      <script>document.write(new Date().getFullYear())</script>
                      Made with <i class="material-icons">favorite</i> by <a target="_blank" href="{{ config('backpack.base.developer_link') }}">BMI Digital</a>.
                  </p>
              </div>

            </footer>
          </div>
        </div>
    </app-layout>
    <!-- ./wrapper -->
  </app-my-app>

    @yield('before_scripts')

    <!-- jQuery 2.2.0 -->
    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="{{ asset('vendor/adminlte') }}/plugins/jQuery/jQuery-2.2.0.min.js"><\/script>')</script> -->
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('js') }}/jquery.min.js"></script>
    <script src="{{ asset('js') }}/popper.min.js"></script>
    <script src="{{ asset('js') }}/bootstrap-material-design.js"></script>
    <script src="{{ asset('js') }}/plugins/jquery.datatables.js"></script>


    <script src="{{ asset('vendor/adminlte') }}/plugins/pace/pace.min.js"></script>
    <!-- <script src="{{ asset('vendor/adminlte') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/slimScroll/jquery-jvectormap.js"></script> -->
    <script src="{{ asset('js') }}/plugins/sweetalert2.min.js"></script>
    <script src="{{ asset('js') }}/plugins/jquery-jvectormap.js"></script>
    <script src="{{ asset('js') }}/core/jquery.perfect-scrollbar.min.js"></script>
    <script src="{{ asset('js') }}/core/jquery.validate.min.js"></script>

    <script src="{{ asset('assets') }}/js/zone.min.js"></script>


    <script src="{{ asset('js') }}/plugins/arrive.min.js"></script>

    <!-- <script src="{{ asset('js') }}/plugins/jquery.datatables.js"></script> -->
    <script src="{{ asset('js') }}/plugins/jquery.select-bootstrap.js"></script>
    <script src="{{ asset('js') }}/demo.js"></script>
    <script src="{{ asset('js') }}/material-dashboard.js?v=2.0.0"></script>

    <script src="{{ asset('js') }}/jSignature/jSignature.min.js"></script>

    <script src="{{ asset('vendor/adminlte') }}/plugins/pace/pace.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/core/jquery.perfect-scrollbar.min.js"></script>
    <!-- <script src="{{ asset('assets') }}/js/dropdown.js"></script> -->
    <script type="text/javascript">
    // To make Pace works on Ajax calls
      $(document).ajaxStart(function() { Pace.restart(); });

      // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
      $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

      // Set active state on menu element
      var current_url = "{{ Request::fullUrl() }}";
      var full_url = current_url+location.search;
      var $navLinks = $("ul.sidebar-menu li a");
      // First look for an exact match including the search string
      var $curentPageLink = $navLinks.filter(
          function() { return $(this).attr('href') === full_url; }
      );
      // If not found, look for the link that starts with the url
      if(!$curentPageLink.length > 0){
          $curentPageLink = $navLinks.filter(
              function() { return $(this).attr('href').startsWith(current_url) || current_url.startsWith($(this).attr('href')); }
          );
      }

      $curentPageLink.parents('li').addClass('active');
      {{-- Enable deep link to tab --}}
      var activeTab = $('[href="' + location.hash.replace("#", "#tab_") + '"]');
      activeTab && activeTab.tab('show');
      $('.nav-tabs a').on('shown.bs.tab', function (e) {
          location.hash = e.target.hash.replace("#tab_", "#");
      });
    </script>
    <!-- page script -->


    @include('backpack::inc.alerts')

    @yield('after_scripts')

    <!-- JavaScripts -->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
