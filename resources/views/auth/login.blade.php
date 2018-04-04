@include('common.errorsettings')

@include('common.head')
@include('common.navigation')

<link rel="stylesheet" type="text/css" href="/css/member.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="/layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>
<!--<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>-->




@if($val_id=='1')


    <div class="form-box l-col-wrap">

        <div class="l-col form-box__form">
            <h1 class="form-box__title">Login For Tenant<p><p>請輸入房客的帳號密碼進行登入</p></h1>
            <br>

            <form name="loggedin" id="loggedin" method="post" action="/auth/login/find" class="form form--log-in">
                {{ csrf_field() }}
                <label for="account" class="form__label">房客帳號：</label>
                <input id="account" name="account" type="text" class="form__field" placeholder="請輸入房客帳號" >

                <label for="password" class="form__label">房客密碼：</label>
                <input id="inputPassword" name="password" type="password" class="form__field" placeholder="請輸入房客密碼" >

                <br>
                <input name="submit" type="submit" class="form__button button" value="Login">
            </form>

            <small class="form-box__addon u-auto-format-text">
                還尚未註冊嗎? <a href='/auth/register/1'>註冊</a>
            </small>
            <br>
            <small class="form-box__addon u-auto-format-text">
                不是房客? <a href='/auth/login/lists'>返回</a>
            </small>

        </div>
    </div>
@endif

@if($val_id=='2')
    <div class="form-box l-col-wrap">

        <div class="l-col form-box__form">
            <h1 class="form-box__title">Login For Landlord<p><p>請輸入房東的帳號密碼進行登入</p></h1>
            <br>

            <form name="loggedin" id="loggedin" method="post"  action="/auth/login/find" class="form form--log-in" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="loggedin_2" value="true">
                <label for="account" class="form__label">房東帳號：</label>
                <input id="account" name="account" type="text" class="form__field" placeholder="請輸入房東帳號" required="true" autofocus="">

                <label for="password" class="form__label">房東密碼：</label>
                <input id="password" name="password" type="password" class="form__field" placeholder="請輸入房客密碼" required="true">

                <br>
                <input name="submit" type="submit" class="form__button button" value="Login">
            </form>

            <small class="form-box__addon u-auto-format-text">
                還尚未註冊嗎? <a href='/auth/register/2'>註冊</a>
            </small>
            <br>
            <small class="form-box__addon u-auto-format-text">
                不是房東? <a href='/auth/login/lists'>返回</a>
            </small>

        </div>
    </div>
@endif

@if($val_id=='3')
    <div class="form-box l-col-wrap">

        <div class="l-col form-box__form">
            <h1 class="form-box__title">Login For administrator<p><p>請輸入管理人員的帳號密碼進行登入</p></h1>
            <br>

            <form id="sign-up" method="post"  action="/admin/find" class="form form--log-in" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="login" value="true">
                <label for="account" class="form__label">管理人員帳號：</label>
                <input name="account" type="account" class="form__field" placeholder="請輸入管理人員帳號" required="true" autofocus="">

                <label for="password" class="form__label">管理人員密碼：</label>
                <input name="password" type="password" class="form__field" placeholder="請輸入管理人員密碼" required="true" >


                <br>
                <input name="submit" type="submit" class="form__button button" value="Login">
            </form>


            <br>
            <small class="form-box__addon u-auto-format-text">
                不是管理人員? <a href='/auth/login/lists'>返回</a>
            </small>

        </div>
    </div>
@endif


<!-- Footer -->
@include('common.footer')

@if($error!='')
    <script>
        layer.alert('{{$error}}', {
            skin: 'layui-layer-lan' //样式类名
            ,closeBtn: 0
        });

    </script>
@endif
