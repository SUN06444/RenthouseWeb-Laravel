{{Session::reflash()}}


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href='/index'>RentHouse For Students</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                @if (session('login'))
                    @foreach(session('login') as $login)
                        @if($login->level ==1)
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ $login->name }}<br>{{ $login->account }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">

                                        <li><a href="/collect/compare/lists">房屋收藏比較</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/logout">登出</a></li>
                                    </ul>
                                </li>
                            </ul>
                        @elseif($login->level ==2)
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ $login->name }}<br>{{ $login->account }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">

                                        <li><a href="/publish/lists">刊登房屋</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/logout">登出</a></li>
                                    </ul>
                                </li>
                            </ul>
                        @endif
                    @endforeach

                @else
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href='/auth/register/lists'>註冊會員<br>Register</a></li>
                        <li><a href='/auth/login/lists'>登入會員
                                <br>Login</a></li>
                    </ul>
                @endif

        </div>
    </div>
</nav>

<!--class="active"-->
<style type="text/css" media="screen">
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>

