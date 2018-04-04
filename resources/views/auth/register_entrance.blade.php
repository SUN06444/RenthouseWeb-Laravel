<!DOCTYPE html>


@include('common.errorsettings')
@include('common.head')
@include('common.navigation')


<link rel="stylesheet" type="text/css" href="/css/member.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script> -->
<script src="/layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>

<div class="form-box l-col-wrap">
    <div class="l-col form-box__content">
        <h1 class="form-box__title">Register</h1>
        <br>
        <div class="u-auto-format-text">
            <p>請點擊下方按鈕進行註冊</p>

            <button  type="submit" class="form__button button" value="1" onclick="lev_value(this)" style="margin-bottom: 10px;">註冊房客</button>
            <button  type="submit" class="form__button button" value="2" onclick="lev_value(this)" style="margin-bottom: 10px;">註冊房東</button>

            <small class="form-box__addon u-auto-format-text">
                已經註冊了嗎? <a href='/auth/login/lists'>登入</a>
            </small>

        </div>

    </div>

</div>


<!-- Footer -->
@include('common.footer')

<script type="text/javascript">
    function lev_value($val){
        switch($val.value) {
            case '1':
                window.location.pathname = "/auth/register/1";
                break;
            case '2':
                window.location.pathname = "/auth/register/2";
                break;
        }
    }
</script>