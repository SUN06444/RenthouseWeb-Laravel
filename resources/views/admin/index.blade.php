{{Session::reflash()}}

@include('common.errorsettings')
@include('common.head')


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin - 管理平台</title>

    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Admin - 管理平台</span></a>
                </div>

                <div class="clearfix"></div>

            @include('admin.sidebar')




            <!-- page content -->
                <div class="right_col" role="main">

                @if (session('all_count_data') )
                    <!-- top tiles -->
                    <div class="row tile_count">
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> 會員總人數</span>
                            <div class="count green"> {{ session('all_count_data')[0] }}</div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> 房客總人數</span>
                            <div class="count">{{ session('all_count_data')[1] }}</div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> 房東總人數</span>
                            <div class="count">{{ session('all_count_data')[2] }}</div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-clock-o"></i> 總房屋筆數</span>
                            <div class="count">{{ session('all_count_data')[3] }}</div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> 待審核筆數</span>
                            <div class="count">{{ session('all_count_data')[4] }}</div>
                        </div>



                    </div>
                    @endif


                        <div class="x_title">
                            <h2>房東流程簡介 <small>For Landlord</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">


                            <!-- Smart Wizard -->
                            <p>管理人員須了解每個流程。</p>
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps">
                                    <li>
                                        <a href="#step-1">
                                            <span class="step_no">1</span>
                                            <span class="step_descr">
                                              Step 1<br />
                                              <small>註冊會員 - 房東</small>
                                          </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="step_no">2</span>
                                            <span class="step_descr">
                                              Step 2<br />
                                              <small>刊登房屋，等待審核</small>
                                          </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <span class="step_no">3</span>
                                            <span class="step_descr">
                                              Step 3<br />
                                              <small>管理人員審核房屋</small>
                                          </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-4">
                                            <span class="step_no">4</span>
                                            <span class="step_descr">
                                              Step 4<br />
                                              <small>審核通過，房屋才上架</small>
                                          </span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- End SmartWizard Content -->
                 <br>

                    <div class="x_title">
                        <h2>房客流程簡介 <small>For tenants</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <!-- Smart Wizard -->
                        <p>管理人員須了解每個流程。</p>
                        <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                                <li>
                                    <a href="#step-1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">
                                              Step 1<br />
                                              <small>註冊會員 - 房客</small>
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">
                                              Step 2<br />
                                              <small>系統自動寄信</small>
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">
                                              Step 3<br />
                                              <small>打開信箱裡的信件</small>
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-4">
                                        <span class="step_no">4</span>
                                        <span class="step_descr">
                                              Step 4<br />
                                              <small>即可登入會員</small>
                                          </span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- End SmartWizard Content -->
                  <br>


                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="x_panel tile fixed_height_320 overflow_hidden">
                            <div class="x_title">
                                <h2>本系統使用的程式語言</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="" style="width:100%">
                                    <tr>
                                        <th style="width:37%;">
                                            <p>Top 5</p>
                                        </th>
                                        <th>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                <p class="">Program</p>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                <p class="">Percentage</p>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                                        </td>
                                        <td>
                                            <table class="tile_info">
                                                <tr>
                                                    <td>
                                                        <p><i class="fa fa-square red"></i>Laravel </p>
                                                    </td>
                                                    <td>35%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p><i class="fa fa-square blue"></i>php</p>
                                                    </td>
                                                    <td>25%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p><i class="fa fa-square purple"></i>MySQL </p>
                                                    </td>
                                                    <td>20%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p><i class="fa fa-square aero"></i>JavaScript </p>
                                                    </td>
                                                    <td>15%</td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p><i class="fa fa-square green"></i>jQuery </p>
                                                    </td>
                                                    <td>5%</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>近期通知 -<small>房客</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <article class="media event">
                                        <a class="pull-left date">
                                            <p class="month">April</p>
                                            <p class="day">23</p>
                                        </a>
                                        <div class="media-body">
                                            <a class="title" href="#">Item One Title</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </article>
                                    <article class="media event">
                                        <a class="pull-left date">
                                            <p class="month">April</p>
                                            <p class="day">23</p>
                                        </a>
                                        <div class="media-body">
                                            <a class="title" href="#">Item Two Title</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </article>

                                    <article class="media event">
                                        <a class="pull-left date">
                                            <p class="month">April</p>
                                            <p class="day">23</p>
                                        </a>
                                        <div class="media-body">
                                            <a class="title" href="#">Item Two Title</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </article>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>近期通知 -<small>房東</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <article class="media event">
                                            <a class="pull-left date">
                                                <p class="month">April</p>
                                                <p class="day">23</p>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Item One Title</a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </article>
                                        <article class="media event">
                                            <a class="pull-left date">
                                                <p class="month">April</p>
                                                <p class="day">23</p>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Item Two Title</a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </article>
                                        <article class="media event">
                                            <a class="pull-left date">
                                                <p class="month">April</p>
                                                <p class="day">23</p>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Item Two Title</a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </article>


                                    </div>
                                </div>
                            </div>
<br>

                        </div>

                    </div>
                    <!-- /page content -->






                </div>
            </div>

            <!-- jQuery -->
            <script src="/vendors/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- FastClick -->
            <script src="/vendors/fastclick/lib/fastclick.js"></script>
            <!-- NProgress -->
            <script src="/vendors/nprogress/nprogress.js"></script>
            <!-- Chart.js -->
            <script src="/vendors/Chart.js/dist/Chart.min.js"></script>
            <!-- gauge.js -->
            <script src="/vendors/gauge.js/dist/gauge.min.js"></script>
            <!-- bootstrap-progressbar -->
            <script src="/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
            <!-- iCheck -->
            <script src="/vendors/iCheck/icheck.min.js"></script>
            <!-- Skycons -->
            <script src="/vendors/skycons/skycons.js"></script>
            <!-- Flot -->
            <script src="/vendors/Flot/jquery.flot.js"></script>
            <script src="/vendors/Flot/jquery.flot.pie.js"></script>
            <script src="/vendors/Flot/jquery.flot.time.js"></script>
            <script src="/vendors/Flot/jquery.flot.stack.js"></script>
            <script src="/vendors/Flot/jquery.flot.resize.js"></script>
            <!-- Flot plugins -->
            <script src="/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
            <script src="/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
            <script src="/vendors/flot.curvedlines/curvedLines.js"></script>
            <!-- DateJS -->
            <script src="/vendors/DateJS/build/date.js"></script>
            <!-- JQVMap -->
            <script src="/vendors/jqvmap/dist/jquery.vmap.js"></script>
            <script src="/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
            <script src="/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
            <!-- bootstrap-daterangepicker -->
            <script src="/vendors/moment/min/moment.min.js"></script>
            <script src="/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

            <!-- Custom Theme Scripts -->
            <script src="/build/js/custom.min.js"></script>

</body>
