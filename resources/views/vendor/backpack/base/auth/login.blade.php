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
    <!-- <link rel="stylesheet" href="{{ asset('vendor/backpack/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/material-dashboard.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('vendor/backpack/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/material-dashboard/material-dashboard.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('vendor/backpack/demo.css') }}"> -->



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="off-canvas-sidebar login-page">
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary navbar-transparent navbar-absolute" color-on-scroll="500">
	<div class="container">
		<div class="navbar-wrapper">
			<div class="navbar-toggle">
	            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-bar bar1"></span>
	                <span class="navbar-toggler-bar bar2"></span>
	                <span class="navbar-toggler-bar bar3"></span>
	            </button>
	        </div>
	        <a class="navbar-brand" href="/">Texas Bible Institute Administrator</a>
		</div>

        <div class="collapse navbar-collapse justify-content-end" id="navbar">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a href="../admin/dashboard" class="nav-link">
                      <i class="material-icons">dashboard</i>
                      Dashboard
                  </a>
              </li>
              <!-- <li class= "nav-item ">
                  <a href="../admin/register" class="nav-link">
                      <i class="material-icons">person_add</i>
                      Register
                  </a>
              </li> -->
              <li class= "nav-item   ">
                  <a href="../admin/login" class="nav-link">
                      <i class="material-icons">fingerprint</i>
                      Login
                  </a>
              </li>

              <li class= "nav-item active">
                  <a href="mailto:admin@bmidigital.com" class="nav-link">
                      <i class="material-icons">email</i>
                      BMI Digital
                  </a>
              </li>
          </ul>
        </div>
	</div>
</nav>
<!-- End Navbar -->


    <div class="wrapper wrapper-full-page">
            <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('../img/sidebar.jpg'); background-size: cover; background-position: top center;">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->

            <div class="container">
              <div class="row">
                <div class="col-md-3 col-sm-6 ml-auto mr-auto">

                    <form class="form" role="form" method="POST" action="{{ url(config('backpack.base.route_prefix').'/login') }}">
                      {!! csrf_field() !!}
                      <div class="card card-profile text-center card-hidden">

                        <div class="card-header">
                          <div class="card-avatar">
                            <a href="../admin/login">
                      				<img class="img" src="https://texasbibleinstitute.org/wp-content/uploads/2017/06/TBI17-WebsiteLOGO.png">
                      			</a>
                          </div>
                        </div>

                        <div class="card-body ">
                      		<span class="bmd-form-group">
                            <div class="input-group">
                      				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control" name="email" placeholder="Email..." value="{{ old('email') }}">
                              </div>
                      			</div>
                          </span>

                      		<span class="bmd-form-group">
                            <div class="input-group">
                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        				<input type="password" class="form-control" name="password" placeholder="Password...">
                                @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                                @endif
                              </div>
                      			</div>
                          </span>

                          <span class="bmd-form-group">
                            <div class="input-group">
                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="form-check">
                                  <label class="form-check-label">
                                      <!-- <input class="form-check-input" type="checkbox" value=""> -->
                                      <input class="form-check-input" type="checkbox" name="remember">
                                      {{ trans('backpack::base.remember_me') }}
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                  </label>
                                </div>

                              </div>
                      			</div>
                          </span>
                        </div>
                        <div class="card-footer justify-content-center">

                            <button type="submit" class="btn btn-danger">
                                {{ trans('backpack::base.login') }}
                            </button>
                            <a class="btn" href="{{ url(config('backpack.base.route_prefix', 'admin').'/password/reset') }}">RESET PASSWORD</a>
                        </div>

                      </div>
                    </form>
                </div>
              </div>
            </div>
            <footer class="footer ">

    <div class="container">
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
        <div class="copyright pull-right">
          ©
          2018
          {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" href="{{ config('backpack.base.developer_link') }}">BMI Digital</a>.
        </div>
    </div>



</footer>


    </div>

    </div>

</body>
<script src="{{ asset('js') }}/jquery.min.js"></script>
<script src="{{ asset('js') }}/popper.min.js"></script>
<script src="{{ asset('js') }}/bootstrap-material-design.js"></script>
<script src="{{ asset('js') }}/plugins/jquery.datatables.js"></script>


<script src="{{ asset('vendor/adminlte') }}/plugins/pace/pace.min.js"></script>
<!-- <script src="{{ asset('vendor/adminlte') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('vendor/adminlte') }}/plugins/slimScroll/jquery-jvectormap.js"></script> -->
<script src="{{ asset('vendor/adminlte') }}/plugins/sweetalert2.min.js"></script>
<script src="{{ asset('vendor/adminlte') }}/plugins/jquery-jvectormap.js"></script>
<script src="{{ asset('vendor/adminlte') }}/core/jquery.perfect-scrollbar.min.js"></script>
<script src="{{ asset('vendor/adminlte') }}/core/jquery.validate.min.js"></script>

<script src="{{ asset('assets') }}/js/zone.min.js"></script>


<script src="{{ asset('js') }}/plugins/arrive.min.js"></script>

<!-- <script src="{{ asset('js') }}/plugins/jquery.datatables.js"></script> -->
<script src="{{ asset('js') }}/plugins/jquery.select-bootstrap.js"></script>
<script src="{{ asset('js') }}/demo.js"></script>
<script src="{{ asset('js') }}/material-dashboard.js?v=2.0.0"></script>

<script src="{{ asset('js') }}/jSignature/jSignature.min.js"></script>
<script type="text/javascript">
    $().ready(function(){
        demo.checkFullPageBackgroundImage();

        setTimeout(function(){
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

<script src="{{ asset('vendor/adminlte') }}/plugins/pace/pace.min.js"></script>
<script src="{{ asset('vendor/adminlte') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('vendor/adminlte') }}/core/jquery.perfect-scrollbar.min.js"></script>
