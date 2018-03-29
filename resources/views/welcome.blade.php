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
    <link rel="stylesheet" href="{{ asset('vendor/backpack/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/virgin/material-dashboard.css') }}">
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
            <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('img/sidebar.jpg'); background-size: cover; background-position: top center;">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="container">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
              <div class="card">
                <div class="card-header card-header-text card-header-danger">

          					<div class="card-text">

                        <h2 class="card-title">Texas Bible Institute Dashboard v0.2 </h2>
                        <h4 class="card-category">Admissions, Student Life and more!</h4>

          					</div>

          			</div>
                <div class="card-body">

                  <h3>Welcome! Please Log in to get started!</h3>

                </div>
              </div>

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
          <script>document.write(new Date().getFullYear())</script>
          {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" href="{{ config('backpack.base.developer_link') }}">{{ config('backpack.base.developer_name') }}</a>.
        </div>
    </div>



</footer>


    </div>

    </div>

</body>
