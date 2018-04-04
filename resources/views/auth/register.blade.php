
@include('common.errorsettings')
@include('common.head')
@include('common.navigation')


<link rel="stylesheet" type="text/css" href="/css/member.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



@if($val_id=='1')
    <div class="form-box l-col-wrap">
        <div class="l-col form-box__content">
            <h1 class="form-box__title">房客註冊須知</h1>
            <div class="u-auto-format-text">
                <ul class="A">
                    　      <li>本系統由各房東所刊登的租屋資料僅供同學們參考用，請同學們還是要實地去參觀比較，慎重考慮後再承租，以減少租屋糾紛的發生。</li>
                    　      <li>本租屋網僅提供學生租屋參考，房東不會向學生收取仲介費，如發現有收費情形，煩請點選上方“連絡我們”或以電話告知，『請勿給予任何費用』，以確保同學們的權益。</li></br>
                    <li>若發覺房東所刊登的資料和實際狀況差距過大，煩請點選上方“聯絡我們”或以電話告知，以確保同學們的權益。</li></br>
                    <li>若您所住之租屋處所之評估等級有誤，亦可告知，我們將為您作更正，您的評估是供學弟妹們未來租屋的參考，請客觀的評估。</li></br>
                </ul>

            </div>
        </div>
        <div class="l-col form-box__form">

            <form id="register" action="/auth/register/create_tenant" method="POST"  class="form form--sign-up">

                {{ csrf_field() }}

                <label for="account" class="form__label">帳號：</label>
                <span class="warn-account" style="margin-left:5px; color: red;"></span>
                <input id="account" name="account" type="text" class="form__field" placeholder="請輸入帳號">

                <label for="password" class="form__label">密碼：</label>
                <span class="warn-password" style="margin-left:5px; color: red;"></span>
                <input id="password" name="password" type="password" class="form__field" placeholder="請輸入密碼">

                <label for="password2" class="form__label">確認密碼：</label>
                <span class="warn-password2" style="margin-left:5px; color: red;"></span>
                <input id="password2" name="password2" type="password" class="form__field" placeholder="請輸入確認密碼">

                <label for="name" class="form__label">房客姓名：</label>
                <span class="warn-name" style="margin-left:5px; color: red;"></span>
                <input id="name" name="name" type="text" class="form__field" placeholder="請輸入姓名">

                <label for="email" class="form__label">email:</label>
                <span class="warn-email" style="margin-left:5px; color: red;"></span>
                <input id="email" name="email" type="text" class="form__field" placeholder="請輸入email">

                <br>

                <input id="submit_btn"  type="submit" value="提交" class="form__button button">
            </form>


            <small class="form-box__addon u-auto-format-text">
                已經註冊過了? <a href='/auth/login/1'>登入</a>
            </small>
            <br>
            <small class="form-box__addon u-auto-format-text">
                不是要註冊房客? <a href='/auth/register/lists'>返回</a>
            </small>

        </div>
    </div>
@endif

@if($val_id=='2')
    <div class="form-box l-col-wrap">
        <div class="l-col form-box__content">
            <h1 class="form-box__title">房東註冊須知</h1>
            <div class="u-auto-format-text">

                <ul class="A">
                    　      <li>租屋刊登成功後，需經審核通過，才開放查詢。</li>
                    　      <li>請儘量提供照片供學生參考，但注意檔案限制。</li></br>
                    <li>為保持資料庫之最新狀態，於每學期會作整理一次，若您的資料被刪除，請再上“租屋刊登”上傳一次。</li></br>
                    <li>任何意見及建議請點選右上方“聯絡我們”或以電話告知。</li></br>
                    </br>
                </ul>

            </div>
        </div>
        <div class="l-col form-box__form">

            <form id="register" action="/auth/register/create_landlord" method="POST"  class="form form--sign-up">

                {{ csrf_field() }}

                <label for="account" class="form__label">帳號：</label>
                <span class="warn-account" style="margin-left:5px; color: red;"></span>
                <input id="account" name="account" type="text" class="form__field" placeholder="請輸入帳號">


                <label for="password" class="form__label">密碼：</label>
                <span class="warn-password" style="margin-left:5px; color: red;"></span>
                <input id="password" name="password" type="password" class="form__field" placeholder="請輸入密碼">



                <label for="password2" class="form__label">確認密碼：</label>
                <span class="warn-password2" style="margin-left:5px; color: red;"></span>
                <input id="password2" name="password2" type="password" class="form__field" placeholder="請輸入確認密碼">


                <label for="name" class="form__label">房東姓名：</label>
                <span class="warn-name" style="margin-left:5px; color: red;"></span>
                <input id="name" name="name" type="text" class="form__field" placeholder="請輸入姓名">



                <label for="email" class="form__label">email:</label>
                <span class="warn-email" style="margin-left:5px; color: red;"></span>
                <input id="email" name="email" type="text" class="form__field" placeholder="請輸入email">

                <br>
                <input id="submit_btn" type="submit" class="form__button button">
            </form>

            <small class="form-box__addon u-auto-format-text">
                已經註冊過了? <a href='/auth/login/2'>登入</a>
            </small>
            <br>
            <small class="form-box__addon u-auto-format-text">
                不是要註冊房東? <a href='/auth/register/lists'>返回</a>
            </small>

        </div>
    </div>
@endif

<!-- Footer -->
@include('common.footer')

<script>
    $(document).ready(function () {

        $('#submit_btn').click(function (event) {

            event.preventDefault();

            $password = $('#password').val();
            $password2 = $('#password2').val();

            $('.warn-account').html('').hide();

            $('.warn-password').html('').hide();

            $('.warn-password2').html('').hide();

            $('.warn-name').html('').hide();

            $('.warn-email').html('').hide();

            if ($('#account').val() === '') {
                $('.warn-account').html('請輸入帳號').show();
                $('#account').css("border-color","rgb(253, 13, 77)");
                $('#account').css("background-color","rgb(255, 255, 255)");
            }

            if ($('#password').val() === '') {
                $('.warn-password').html('請輸入密碼').show();
                $('#password').css("border-color","rgb(253, 13, 77)");
                $('#password').css("background-color","rgb(255, 255, 255)");
            }

            if ($('#password2').val() === '') {
                $('.warn-password2').html('請輸入確認密碼').show();
                $('#password2').css("border-color","rgb(253, 13, 77)");
                $('#password2').css("background-color","rgb(255, 255, 255)");
            }

            if ($('#name').val() === '') {
                $('.warn-name').html('請輸入姓名').show();
                $('#name').css("border-color","rgb(253, 13, 77)");
                $('#name').css("background-color","rgb(255, 255, 255)");
            }

            if ($('#email').val() === '') {
                $('.warn-email').html('請輸入信箱').show();
                $('#email').css("border-color","rgb(253, 13, 77)");
                $('#email').css("background-color","rgb(255, 255, 255)");
            }


            if ($('#account').val() !== '' && $('#password').val() !== '' && $('#password2').val() !== '' && $('#name').val() !== '' && $('#email').val() !== ''  ) {

                $('.warn-account').html('').hide();

                $('.warn-password').html('').hide();

                $('.warn-password2').html('').hide();

                $('.warn-name').html('').hide();

                $('.warn-email').html('').hide();

                if($password!=$password2){
                    alert("密碼輸入不一致，請再次輸入");
                    document.getElementById('password').value = "";
                    $('#password').css("border-color","rgb(253, 13, 77)");
                    $('#password').css("background-color","rgb(255, 255, 255)");
                    document.getElementById('password2').value = "";
                    $('#password2').css("border-color","rgb(253, 13, 77)");
                    $('#password2').css("background-color","rgb(255, 255, 255)");
                }else{
                    $('#register').submit();
                }


            }

        });

    });
</script>





