{{Session::reflash()}}
@include('common.errorsettings')
@include('common.head')
@include('common.navigation')

<link rel="stylesheet" type="text/css" href="/css/member.css">
<link rel="stylesheet" type="text/css" href="/css/tab.css">
<link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/info.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="/layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>
<style type="text/css">
    form{
        margin: 0;
    }
</style>



<div class="main">
    @if (session('house_info'))
        @foreach(session('house_info') as $house_info)
            <div class="main-inner body-width">


                <div class="banner clearfix">
                    <div class="slider" id="slider">

                        <ul class="slider-wrapper">

                            <li class="item" data-title="">
                                <a href="#" class="pic"><img src="{{ $house_info->file1 }}" alt="#"></a>
                            </li>
                            <li class="item" data-title="" data-author="">
                                <a href="#" class="pic"><img src="{{ $house_info->file2 }}" alt="#"></a>
                            </li>
                            <li class="item" data-title="" data-author="">
                                <a href="#" class="pic"><img src="{{ $house_info->file3 }}" alt="#"></a>
                            </li>
                            <li class="item" data-title="" data-author="">
                                <a href="#" class="pic"><img src="{{ $house_info->file4 }}" alt="#"></a>
                            </li>
                            <li class="item" data-title="">
                                <a href="#" class="pic"><img src="{{ $house_info->file5 }}" alt="#"></a>
                            </li>
                        </ul>
                        <a href="javascript:;" class="slider-prev"></a>
                        <a href="javascript:;" class="slider-next"></a>
                        <div class="slider-title">
                            <h2></h2>
                            <span></span>
                        </div>
                        <div class="slider-btns">
                            <span class="item"></span>
                            <span class="item"></span>
                            <span class="item"></span>
                            <span class="item"></span>
                            <span class="item"></span>
                        </div>
                    </div>

                    <div class="banner-info">



                        <div class="news body-border">

                            <ul>
                                <li class="title">{{ $house_info->housename }}　<span style="float: right;">瀏覽次數：{{ $house_info->click }}</span></li>

                                <form name="collect" id="collect" action="/collect/add" method="post" class="form form--sign-up">
                                    {{ csrf_field() }}
                                    <li class="choose">
                                        <a href="#">租金：『 {{ $house_info->rental }}元/月』 </a>
                                        <input type="hidden" name = "house_id" value="{{ $house_info->house_id }}"></input>

                                        @if (count(session('login'))==0)
                                                <button id="warn" type="button" value="warn" onclick="layer.tips('登入會員，即可收藏~', '#warn',{ tips: [2, '#3595CC'],time: 2000}); ">  <span class="icon-text__pink">收藏</span></button>
                                        @endif

                                        @if (session('login'))
                                            @if(count(session('login'))>0)
                                                @foreach(session('login') as $login)
                                                    @if (count(session('check_collect'))>0)
                                                        @foreach(session('check_collect') as $check_house)
                                                            @if($check_house->user_id == $login->user_id)
                                                                <span class="icon-text__pink">已收藏</span>
                                                            @else
                                                                <button name="collect" type="submit" value="collect">  <span class="icon-text__pink">收藏</span></button>
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        <button name="collect" type="submit" value="collect" >  <span class="icon-text__pink">收藏</span></button>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif
                                    </li>
                                </form>


                                <li class="assistant">
                                    <p><i class="layui-icon">&#xe612;</i>&nbsp;聯絡人:  <span style="text-decoration:underline;">{{ $house_info->contact }}</span></p>
                                    <p><i class="layui-icon">&#xe662;</i>&nbsp;與屋主關係:  <span style="text-decoration:underline;">{{  $house_info->relationship }}</span></p>
                                    <p><i class="layui-icon">&#xe609;</i>&nbsp;信箱:  <span style="text-decoration:underline;">{{  $house_info->email }}</span></p>
                                    <p><i class="layui-icon">&#xe63b;</i>&nbsp;連絡電話:  <span style="text-decoration:underline;">{{  $house_info->phone }}</span>   </p>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>
            @endforeach
        @endif


    </div>

</div>

<ul class="tablist" role="tablist">
    <li class="tab" role="tab"><a href="#panel1"><i class="layui-icon">&#xe715;</i>&nbsp; 位置圖  </a></li>
    <li class="tab" role="tab"><a href="#panel2"><i class="layui-icon">&#xe60b;</i>&nbsp;房屋介紹</a></li>

    <li class="tab-menu">
        <div class="line"></div>
        <div class="line"></div>
    </li>
</ul>

<div class="tabpanel show" id="panel1" role="tabpanel">
    @include('house.map')
</div>


<div class="tabpanel" id="panel2" role="tabpanel" >
    <div class="table">
        @include('house.info')
    </div>
</div>


<br>


<!-- Footer -->
@include('common.footer')
<script src="/js/tab.js" type="text/javascript" charset="utf-8" async></script>
<script src="/js/script.js"></script>
