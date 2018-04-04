{{Session::reflash()}}

@include('common.errorsettings')
@include('common.head')

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>審核房屋 </title>

    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="/vendors/starrr/dist/starrr.css" rel="stylesheet">
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
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>


            @include('admin.sidebar')


        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">


                <div class="row">


                        <div class="x_panel">
                            <div class="x_title">
                                <h2>房屋資料審核表 <small>verify_house_data</small></h2>
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
                                <br />
                                @if ($verify_house_data)
                                    @foreach($verify_house_data as $data)
                                <form class="form-horizontal form-label-left" style="width:80%;">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">房屋名稱</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" placeholder="housename" value="{{ $data->housename }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">房屋地址 </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" placeholder="address" value="{{ $data->address }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">租金</label>
                                        <div class="col-md-1 col-sm-1 col-xs-12">
                                            <input type="text" class="form-control" placeholder="rental" value="{{ $data->rental }}">
                                        </div>
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12">押金</label>
                                        <div class="col-md-1 col-sm-1 col-xs-12">
                                            <input type="text" class="form-control" placeholder="deposit" value="{{ $data->deposit }}">
                                        </div>
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12">坪數</label>
                                        <div class="col-md-1 col-sm-1 col-xs-12">
                                            <input type="text" class="form-control" placeholder="ping" value="{{ $data->ping }}">
                                        </div>
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12">屋齡</label>
                                        <div class="col-md-1 col-sm-1 col-xs-12">
                                            <input type="text" class="form-control" placeholder="house_age" value="{{ $data->house_age }}">
                                        </div>
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12">門禁管制</label>
                                        <div class="col-md-1 col-sm-1 col-xs-12">
                                            <input type="text" class="form-control" placeholder="curfew" value="{{ $data->curfew }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">租期</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <input type="text" class="form-control" placeholder="lease_term" value="{{ $data->lease_term }}">
                                        </div>
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12">房型</label>
                                        <div class="col-md-1 col-sm-1 col-xs-12">
                                            <input type="text" class="form-control" placeholder="housetype" value="{{ $data->housetype }}">
                                        </div>
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12">隔間材質</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <input type="text" class="form-control" placeholder="material" value="{{ $data->material }}">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">租屋限制
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <textarea class="form-control" rows="3" placeholder='house_limit'>{{ $data->house_limit }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">備註
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <textarea class="form-control" rows="3" placeholder='others'>{{ $data->others }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">選項

                                        </label>

                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="flat" checked="checked"> {{ $data->identity_requirements }}
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="flat" checked="checked">  寵物 （{{ $data->pet }}）
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="flat" checked="checked"> 開伙（{{ $data->opened }}）
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="flat" checked="checked"> 陽台（{{ $data->balcony }}）
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="flat" checked="checked"> 電梯（{{ $data->elevator }}）
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="flat" checked="checked"> 車位（{{ $data->parking_spaces }}）
                                                </label>
                                            </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">生活機能

                                        </label>

                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="flat" checked="checked"> {{ $data->life_function }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">提供設備

                                        </label>

                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="flat" checked="checked"> {{ $data->equipment }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">安全設備

                                        </label>

                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="flat" checked="checked"> {{ $data->security_equipment }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="ln_solid"></div>
@if(($data->verify)==0)
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-10">
                                            <button type="button" class="btn btn-danger" onclick="javascript:location.pathname='admin/lists/2'">no pass</button>


                                            <button type="button" class="btn btn-primary" onclick="javascript:location.pathname='admin/pass/{{$data->user_id}}/{{$data->house_id}}'">pass</button>

                                        </div>
                                    </div>
@else
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-10">
                                                <button type="button" class="btn btn-danger" onclick="javascript:location.pathname='admin/lists/2'">返回</button>
                                            </div>
                                        </div>
@endif
                                </form>
                                    @endforeach
                                    @endif
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
<!-- iCheck -->
<script src="/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/vendors/moment/min/moment.min.js"></script>
<script src="/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="/vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="/build/js/custom.min.js"></script>
