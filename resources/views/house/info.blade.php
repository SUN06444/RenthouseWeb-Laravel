{{Session::reflash()}}
@if (session('house_info'))
    @foreach(session('house_info') as $house_info)
        <table style="word-break: keep-all;" height="50%" class="table table-striped table-hover table-bordered">
            <tr id="mid">
                <td  colspan="8"><span style="font-size:20px;">詳細資訊</span></td>
            </tr>

            <tr id="mid">
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">地址</span></td>
                <td style="width: 25%";><span style="font-size:15px;">{{  $house_info->address }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">刊登日期</span></td>
                <td style="width: 8%";><span style="font-size:15px;">{{  date('Y-m-d', strtotime($house_info->created_at))  }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">租期</span></td>
                <td><span style="font-size:15px;">{{  $house_info->lease_term }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">租金</span></td>
                <td><span style="font-size:15px;">{{  $house_info->rental }}元/月</span></td>
            </tr>

            <tr id="mid">
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">房型</span></td>
                <td><span style="font-size:15px;">{{  $house_info->housetype }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">坪數</span></td>
                <td><span style="font-size:15px;">{{  $house_info->ping }}坪</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">屋齡</span></td>
                <td><span style="font-size:15px;">{{  $house_info->house_age}}年</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">押金</span></td>
                <td><span style="font-size:15px;">{{  $house_info->deposit }}元</span></td>
            </tr>

            <tr id="mid">
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">寵物</span></td>
                <td><span style="font-size:15px;">{{  $house_info->pet }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">電梯</span></td>
                <td><span style="font-size:15px;">{{  $house_info->elevator }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">開伙</span></td>
                <td><span style="font-size:15px;">{{  $house_info->opened }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">車位</span></td>
                <td><span style="font-size:15px;">{{  $house_info->parking_spaces }}</span></td>
            </tr>

            <tr id="mid">
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">租屋限制</span></td>
                <td><span style="font-size:15px;">{{  $house_info->house_limit }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">隔間材質</span></td>
                <td><span style="font-size:15px;">{{  $house_info->material }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">門禁管制</span></td>
                <td><span style="font-size:15px;">{{  $house_info->curfew }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">提供設備</span></td>
                <td><span style="font-size:15px;">{{  $house_info->equipment }}</span></td>
            </tr>

            <tr id="mid">
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">身分要求</span></td>
                <td><span style="font-size:15px;">{{  $house_info->identity_requirements }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">陽台:</span></td>
                <td><span style="font-size:15px;">{{  $house_info->balcony }}</span></td>
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">安全設備</span></td>
                <td colspan="3">{{  $house_info->security_equipment }}</td>
            </tr>

            <tr id="mid">
                <td style="background-color: #bbbbbb82; padding-top: 2.5%";><span style="font-size:18px;">生活機能</span></td>
                <td style="padding-top: 2.5%"; colspan="7"><p>
                    {{  $house_info->life_function }}
                </td>
            </tr>

            <tr id="mid">
                <td style="background-color: #bbbbbb82";><span style="font-size:18px;">備註</span></td>
                <td colspan="7">{{  $house_info->others }}</td>
            </tr>

        </table>
    @endforeach
@endif