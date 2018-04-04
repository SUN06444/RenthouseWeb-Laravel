{{Session::reflash()}}

@include('common.errorsettings')
@include('common.head')

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>會員審核系統 </title>

    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/admin/index" class="site_title"><i class="fa fa-paw"></i> <span>會員審核系統</span></a>
                </div>

                <div class="clearfix"></div>

            @include('admin.sidebar')

            <!-- /top navigation -->





            <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Verify Member <small>- data detail</small></h3>
                            </div>

                            <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>審核 - 房東資料 （landlord - data）</h2>
                                        <ul class="nav navbar-right panel_toolbox">

                                            <li style="margin-left:68%;"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <p>程序步驟 ：　房東註冊　－>　刊登房屋　－>　等待房屋審核　－>　審核完成</p>
                                        <p>請管理人員仔細遵守審核規範。</p>





                                        <!-- start project list -->
                                        <table class="table table-striped projects">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 8%">房東名稱</th>

                                                <th style="width: 15%">房東信箱</th>
                                                <th style="width: 25%">目前進度</th>
                                                <th style="width: 12%">刊登件數</th>
                                                <th style="width: 15%">Status</th>
                                                <th style="width: 15%">房屋刊登資料</th>


                                            </tr>
                                            </thead>
                                            @if ($data)
                                                @foreach($data as $landlord_data)
                                            <tbody>
                                            <tr>
                                                <td>{{ $number++ }}</td>
                                                <td>
                                                    <a>{{ $landlord_data->name }}</a>

                                                </td>

                                                <td>
                                                    {{ $landlord_data->email }}
                                                </td>

                                                <td class="project_progress">
                                                    @if(($landlord_data->status)==1)
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="25"></div>
                                                        </div>
                                                        <small>25% Complete</small>
                                                    @elseif(($landlord_data->status)==2)
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="50"></div>
                                                        </div>
                                                        <small>50% Complete</small>
                                                    @elseif(($landlord_data->status)==3)
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="75"></div>
                                                        </div>
                                                        <small>75% Complete</small>
                                                    @elseif(($landlord_data->status)==4)
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100"></div>
                                                        </div>
                                                        <small>100% Complete</small>
                                                    @endif
                                                </td>

                                                <td>

                                                    <ul class="list-inline">
                                                        <li>
                                                            <img src="/images/house.png" class="avatar" alt="Avatar">
                                                        </li>
                                                        (1/1)

                                                    </ul>
                                                </td>

                                                <td>
                                                    @if(($landlord_data->status)==1)
                                                        <button type="button" class="btn btn-danger btn-xs"> 房東已註冊 </button>
                                                    @elseif(($landlord_data->status)==2)
                                                        <button type="button" class="btn btn-danger btn-xs"> 已刊登房屋 </button>
                                                    @elseif(($landlord_data->status)==3)
                                                        <button type="button" class="btn btn-danger btn-xs"> 待審核房屋 </button>
                                                    @elseif(($landlord_data->status)==4)
                                                        <button type="button" class="btn btn-success btn-xs"> 審核完成 </button>
                                                    @endif

                                                </td>



                                                <td>
                                                    <!-- Large modal -->

                                                    <button type="button" class="btn btn-Primary" onclick="location.href='/admin/verify/{{ $landlord_data->user_id }}'" > 審核房屋</button>


                                                </td>



                                            </tr>
                                            <tr>
                                            </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        <!-- end project list -->

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
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
    <!-- bootstrap-progressbar -->
    <script src="/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/build/js/custom.min.js"></script>
</body>
