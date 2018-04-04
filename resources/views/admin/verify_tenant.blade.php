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
                                        <h2>正式會員 - 房客資料 （tenant - data）</h2>
                                        <ul class="nav navbar-right panel_toolbox">

                                            <li style="margin-left:68%;"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <p>以下狀態會呈現審核狀態，請管理人員仔細遵守審核規範。</p>

                                        <!-- start project list -->
                                        <table class="table table-striped projects">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 10%">房客名稱</th>
                                                <th style="width: 13%">房客帳號</th>
                                                <th style="width: 20%">房客信箱</th>
                                                <th>申請日期</th>
                                                <th>Status</th>


                                            </tr>
                                            </thead>
                                            @if ($data)
                                                @foreach($data as $tenant_data)
                                            <tbody>
                                            <tr>
                                                <td>{{ $number++ }}</td>
                                                <td>
                                                    <a>{{ $tenant_data->name }}</a>

                                                </td>
                                                <td>
                                                    <a>{{ $tenant_data->account }}</a>
                                                </td>

                                                <td>
                                                    {{ $tenant_data->email }}
                                                </td>

                                                <td>
                                                    {{ $tenant_data->created_at }}
                                                </td>

                                                <td>
                                                    @if(($tenant_data->verify) == 0)
                                                        <button type="button" class="btn btn-danger btn-xs"> 已寄件待回覆 </button>
                                                    @endif

                                                    @if(($tenant_data->verify) == 1)
                                                        <button type="button" class="btn btn-success btn-xs">學生身分確認</button>
                                                    @endif
                                                </td>




                                            </tr>
                                            <tr>
                                            </tr>

                                            </tbody>
                                                @endforeach
                                            @endif
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
