@if (Auth::check())
    <!-- Left side column. contains the sidebar -->



    <div class="sidebar" data-active-color="white" data-background-color="red" data-image="../assets/img/sidebar.jpg">
        <app-sidebar-cmp>

        <div class="logo">
            <div class="logo-normal">
                <a class="simple-text" href="https://admin.texasbibleinstitute.org/admin">
                    ADMIN
                </a>
            </div>

            <div class="logo-img">
                <img src="/img/tbilogo.png">
            </div>
        </div>


        <div class="sidebar-wrapper">

            <div class="user">
                <div class="photo">
                    <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" alt="User Image">
                </div>
                <div class="info">
                    <a class="collapsed" data-toggle="collapse" href="#usermenu">
                        <span>
                            <b>{{ Auth::user()->display_name }}</b>
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="collapse" id="usermenu">
                      <ul class="nav">
                          <li class="nav-item">
                              <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}">
                                <!-- <li routerlinkactive="active"><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><b class="fa fa-sign-out"></b> <span>{{ trans('backpack::base.logout') }}</span></a></li> -->
                                <span class="sidebar-mini"> L </span>
                                <span class="sidebar-normal"> Logout </span>
                              </a>
                          </li>

                      </ul>
                  </div>

                </div>
            </div>
            <!---->
            <div class="nav-container">
                <ul class="nav">

                  <li routerlinkactive="active" class="active"><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="material-icons">dashboard</i> <p>{{ trans('backpack::base.dashboard') }}</p></a></li>
                  <!-- li.active / TBI Dashboard -->

                  <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#tbiapplications">
                        <i class="material-icons">school</i>
                        <p> TBI Applications
                           <b class="caret"></b>
                        </p>
                    </a>
                    <!-- nav.nav-link / TBI Applications -->

                    <div class="collapse" id="tbiapplications">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/application') }}">
                                  <span class="sidebar-mini"> AF </span>
                                  <span class="sidebar-normal"> Applications Forms </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/registration') }}">
                                  <span class="sidebar-mini"> RS </span>
                                  <span class="sidebar-normal"> Registration Status </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .collapse / TBI Applications Dropdown Menu -->
                  </li>
                  <!-- li.active / TBI Applications -->

                  <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#tbiadmin">
                        <i class="material-icons">supervisor_account</i>
                        <p> TBI Admin
                           <b class="caret"></b>
                        </p>
                    </a>
                    <!-- nav.nav-link / TBI Admin -->

                    <div class="collapse" id="tbiadmin">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/student') }}">
                                  <span class="sidebar-mini"> TS </span>
                                  <span class="sidebar-normal"> TBI Students </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/program') }}">
                                  <span class="sidebar-mini"> TP </span>
                                  <span class="sidebar-normal"> TBI Programs </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/studentapplicant') }}">
                                  <span class="sidebar-mini"> TA </span>
                                  <span class="sidebar-normal"> TBI Applicants </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .collapse / TBI Admin Dropdown Menu -->
                  </li>
                  <!-- li.active / TBI Admin -->





                  <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#financial">
                        <i class="material-icons">attach_money</i>
                        <p> Financial
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="financial">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/balance') }}">
                                  <span class="sidebar-mini"> AB </span>
                                  <span class="sidebar-normal"> Account Balance </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/expense') }}">
                                  <span class="sidebar-mini"> E </span>
                                  <span class="sidebar-normal"> Expenses </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/payment') }}">
                                  <span class="sidebar-mini"> P </span>
                                  <span class="sidebar-normal"> Payments </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .collapse / Financial Dropdown Menu -->
                  </li>
                  <!-- li.active / Financial -->


                  <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#settings">
                        <i class="material-icons">weekend</i>
                        <p> Student Life
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="settings">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/passregister') }}">
                                  <span class="sidebar-mini"> AP </span>
                                  <span class="sidebar-normal"> Available Passes </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/pass') }}">
                                  <span class="sidebar-mini"> SP </span>
                                  <span class="sidebar-normal"> Student Passes </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/absence') }}">
                                  <span class="sidebar-mini"> SA </span>
                                  <span class="sidebar-normal"> Student Absences </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .collapse / Student Life Dropdown Menu -->
                  </li>
                  <!-- li.active / Student Life -->


                  <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#studentlife">
                        <i class="material-icons">settings</i>
                        <p> Settings
                           <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="studentlife">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}">
                                  <span class="sidebar-mini"> UM </span>
                                  <span class="sidebar-normal"> User Management </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .collapse / Student Life Dropdown Menu -->
                  </li>
                  <!-- li.active / Student Life -->


			            <!--Removed Pass Register Page -->


			            <!-- ================================================ -->
			            <!-- ==== Recommended place for admin menu items ==== -->
			            <!-- ================================================ -->

			            <!-- <li routerlinkactive="active"><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><b class="fa fa-files-o"></b> <span>File manager</span></a></li>
                  <li routerlinkactive="active"><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/page') }}"><b class="fa fa-files-o"></b> <span>Pages</span></a></li>
                  <li routerlinkactive="active"><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}"><b class="fa fa-files-o"></b> <span>Settings</span></a></li> -->

                  <!-- <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li> -->
			            <!-- ======================================= -->
			            <!-- <li class="active">{{ trans('backpack::base.user') }}</li> -->






                </ul>
            </div>

        </div>
</app-sidebar-cmp>
        <div class="sidebar-background" style="background-image: url(../img/sidebar.jpg)"></div>
    </div>

@endif
