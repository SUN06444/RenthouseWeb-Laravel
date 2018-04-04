{{Session::reflash()}}
@include('common.errorsettings')
@include('common.head')

@include('common.navigation')

<link rel="stylesheet" type="text/css" href="/css/one.css">

<link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
<div class="form-box l-col-wrap">

@include('common.publish_step')



    <form id="landlord_info" action="create" method="POST"  class="layui-form" >

        {{ csrf_field() }}
        <div class="layui-form-mid layui-word-aux" style="font-size: 16px;margin-bottom: 10px;">第一步驟 - 請先填寫房東資料：</div>

        <div class="layui-form-item">
            <label class="layui-form-label">聯絡人</label>
            <div class="layui-input-block">
                <input id="contact" name="contact"  type="text"  placeholder="請輸入聯絡人"  class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">關係</label>
            <div class="layui-input-block">
                <input id="relationship" name="relationship" type="text" placeholder="上述聯絡人與房東的關係"  class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">聯絡人電話</label>
            <div class="layui-input-block">
                <input id="phone" name="phone" type="text" placeholder="請輸入聯絡電話" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <br>
            <div class="btns">

                <button  name="nextBtn" type="button" class="layui-btn" id="nextBtn" onclick="formSubmit()">下一步</button>
            </div>
        </div>



        <script type="text/javascript">
            var $step = $("#step");
            var $index = $("#index");

            $step.step({
                index: 0,
                time: 500,
                title: ["填寫房東相關資料","填寫房屋詳細資訊", "提交成功"]
            });

            $index.text($step.getIndex());

            function formSubmit()
            {
                document.getElementById("landlord_info").submit()
            }

        </script>
    </form>

</div>


<br>

<br>

<!-- Footer -->
@include('common.footer')
<script src="/layui/layui.all.js" type="text/javascript" charset="utf-8" async defer></script>
