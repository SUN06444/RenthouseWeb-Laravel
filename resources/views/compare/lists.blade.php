{{Session::reflash()}}

@include('common.errorsettings')
@include('common.head')

<link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="/css/one.css">
<link rel="stylesheet" type="text/css" href="/css/compare.css"> <!-- 收藏表格css-->

@include('common.navigation')

<div class="comparison">

    <table>

        <thead>

        <tr>
            <th class=""><p style="font-size: 30px;margin-bottom: 30px;border-bottom: 6px double black;border-top: 6px double black">房屋比較表</p></th>
            @if (session('compare'))
                @foreach(session('compare') as $compare)
                    <th class="product" style="background:#98f; border-top-left-radius: 5px; border-left:0px;">{{ $compare->housename }}</th>
                @endforeach
            @endif
        </tr>

        <tr>
            <th><span style="color: slategrey;">/~最多收藏5筆資料~/</span></th>
            @if (session('compare'))
                @foreach(session('compare') as $compare)
                    <th class="price-info">
                        <div class="price-now"><span>$ {{ $compare->deposit }}</span>
                            <p>  / 月</p>
                        </div>
                    </th>
                @endforeach
            @endif
        </tr>

        <tr class="compare-row">
            <td style="font-size: 25px;width: 20%;">房&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型</td>
            @if (session('compare'))
                @foreach(session('compare') as $compare)
                    <td>{{ $compare->housetype }}</td>
                @endforeach
            @endif
        </tr>

        <tr>
            <td style="font-size: 25px;">坪&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;數</td>
            @if (session('compare'))
                @foreach(session('compare') as $compare)
                    <td>{{ $compare->ping }}</td>
                @endforeach
            @endif
        </tr>

        <tr class="compare-row">
            <td style="font-size: 25px;">屋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;齡</td>
            @if (session('compare'))
                @foreach(session('compare') as $compare)
                    <td>{{ $compare->house_age }}</td>
                @endforeach
            @endif
        </tr>

        <tr>
            <td style="font-size: 25px;">押&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;金</td>
            @if (session('compare'))
                @foreach(session('compare') as $compare)
                    <td>{{ $compare->deposit }}元</td>
                @endforeach
            @endif
        </tr>

        <tr class="compare-row">
            <td style="font-size: 25px;">寵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;物</td>
            @if (session('compare'))
                @foreach(session('compare') as $compare)
                    <td><span>{{ $compare->pet }}</span></td>
                @endforeach
            @endif
        </tr>

        <tr>
            <td style="font-size: 25px;">開&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;伙</td>
            @if (session('compare'))
                @foreach(session('compare') as $compare)
                    <td><span>{{ $compare->opened }}</span></td>
                @endforeach
            @endif
        </tr>



        <tr class="compare-row">
            <td style="font-size: 25px;">電&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;梯</td>
            @if (session('compare'))
                @foreach(session('compare') as $compare)
                    <td><span>{{ $compare->elevator }}</span></td>
                @endforeach
            @endif
        </tr>

        <tr>
            <td style="font-size: 25px;">車&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位</td>
            @if (session('compare'))
                @foreach(session('compare') as $compare)
                    <td><span>{{ $compare->parking_spaces }}</span></td>
                @endforeach
            @endif
        </tr>

        <tr class="compare-row">
            <td style="font-size: 25px;">陽&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;台</td>
            @if (session('compare'))
                @foreach(session('compare') as $compare)
                    <td><span>{{ $compare->balcony }}</span></td>
                @endforeach
            @endif
        </tr>


        <tr>
            <td></td>
            @if (session('compare'))
                @foreach(session('compare') as $compare)

                    <td>
                        <form name="delete_collect" id="delete_collect" action="/collect/compare/delete/{{ $compare->collect_id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button id="delete_collect" name="delete_collect" type="submit" value="delete_collect" class="price-buy"> 刪除收藏</button>
                        </form>
                    </td>
                @endforeach
            @endif
        </tr>

    </table>
</div>




@include('common.footer')