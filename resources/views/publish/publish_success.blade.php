{{Session::reflash()}}
@include('common.errorsettings')
@include('common.head')

@include('common.navigation')

<link rel="stylesheet" type="text/css" href="/css/one.css">

<link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
<div class="form-box l-col-wrap">

@include('common.publish_step')



    <div class="jumbotron" style="width: 80%;margin: 0 auto;">
        <p style=" font-size: 21px;text-align: center;">房屋資料提交成功，請等待管理人員審核...</p>
        <br>
        <p style="text-align: center;"><a class="layui-btn layui-btn-lg layui-btn-normal" href="/index">回首頁</a></p>
    </div>



    <script type="text/javascript">
        var $step = $("#step");
        var $index = $("#index");

        $step.step({
            index: 2,
            time: 500,
            title: ["填寫房東相關資料","填寫房屋詳細資訊", "提交成功"]
        });

        $index.text($step.getIndex());

    </script>

</div>
<br>

<br>

<!-- Footer -->
@include('common.footer')
<script src="/layui/layui.all.js" type="text/javascript" charset="utf-8" async defer></script>

