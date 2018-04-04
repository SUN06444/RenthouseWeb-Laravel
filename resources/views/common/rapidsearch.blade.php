<!--
  Couldnt Resist, looked too good not to try

  https://dribbble.com/shots/1847266-Craigslist-Redesign?list=searches&tag=craigslist&offset=1
-->
<!--
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
-->

<form name="search" id="search" method="get">
    <nav class="app--nav state--loaded">
        <input type="hidden" name="search" value="true">
        <!--Logo-->
        <a href="#" class="app--logo">快速找房</a>

        <!--sale filter-->
        <div class="rslt__fltr ui-nav-menu state--expanded" id="house_type">
            <button class="ui-nav-menu-trgr" js-ui-menu-trigger>
                <i class="btn__seg ion ion-pricetag"></i><span class="btn__seg btn__seg--txt">房型</span><i class="btn__seg ion ion-ios-arrow-down menu-arrow"></i>
            </button>

            <ul class="ui-nav-menu-opts">
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="house_type" value="雅房"/>
                    <span class="menu__fltr__lbl">雅房</span>
                    <!--<span class="menu__fltr__cntr cntr-clr--1"></span>-->
                </li>

                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="house_type" value="套房"/>
                    <span class="menu__fltr__lbl">套房</span>
                    <!--<span class="menu__fltr__cntr cntr-clr--1"></span>-->
                </li>

                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="house_type" value="公寓"/>
                    <span class="menu__fltr__lbl">公寓</span>
                    <!--<span class="menu__fltr__cntr cntr-clr--1"></span>-->
                </li>

            </ul>
        </div>

        <!--price filter-->
        <div class="rslt__fltr ui-nav-menu state--expanded" id="budget">
            <button class="ui-nav-menu-trgr" js-ui-menu-trigger>
                <i class="btn__seg ion ion-budgettag"></i><span class="btn__seg btn__seg--txt">預算</span>
            </button>

            <ul class="ui-nav-menu-opts">
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="budget" value="*" />
                    <span class="menu__fltr__lbl">不限</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="budget" value="2000~2500" />
                    <span class="menu__fltr__lbl">2000~2500 (每月)</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="budget" value="2500~3000" />
                    <span class="menu__fltr__lbl">2500~3000 (每月)</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="budget" value="3000~3500" />
                    <span class="menu__fltr__lbl">3000~3500 (每月)</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="budget" value="3500~4000" />
                    <span class="menu__fltr__lbl">3500~4000 (每月)</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="budget" value="4000" />
                    <span class="menu__fltr__lbl">4000以上 (每月)</span>
                </li>
            </ul>
        </div>

        <div class="rslt__fltr ui-nav-menu state--expanded" js-ui-menu>
            <button class="ui-nav-menu-trgr" js-ui-menu-trigger>
                <i class="btn__seg ion ion-pingtag"></i><span class="btn__seg btn__seg--txt">坪數</span><i class="btn__seg ion ion-ios-arrow-down menu-arrow"></i>
            </button>

            <ul class="ui-nav-menu-opts">
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="ping" value="*" />
                    <span class="menu__fltr__lbl">不限</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="ping" value="1~5" />
                    <span class="menu__fltr__lbl">5坪以下</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="ping" value="5~10" />
                    <span class="menu__fltr__lbl">5~10坪</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="ping" value="10~15" />
                    <span class="menu__fltr__lbl">10~15坪</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="ping" value="15~20" />
                    <span class="menu__fltr__lbl">15~20坪</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="ping" value="20~25" />
                    <span class="menu__fltr__lbl">20~25坪</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="ping" value="25" />
                    <span class="menu__fltr__lbl">25坪以上</span>
                </li>
            </ul>
        </div>

        <!--year filter-->
        <div class="rslt__fltr ui-nav-menu state--expanded">
            <button class="ui-nav-menu-trgr" js-ui-menu-trigger>
                <i class="btn__seg ion ion-calendartag"></i><span class="btn__seg btn__seg--txt">租期</span>
            </button>



            <ul class="ui-nav-menu-opts">
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="lease_term" value="1~3個月" />
                    <span class="menu__fltr__lbl">1~3個月</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="lease_term" value="半年" />
                    <span class="menu__fltr__lbl">半年</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="lease_term" value="一年" />
                    <span class="menu__fltr__lbl">一年</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="lease_term" value="二年" />
                    <span class="menu__fltr__lbl">二年</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="radio" name="lease_term" value="兩年以上" />
                    <span class="menu__fltr__lbl">兩年以上</span>
                </li>

            </ul>
        </div>


        <!--life filter-->
        <div class="rslt__fltr ui-nav-menu state--expanded">
            <button class="ui-nav-menu-trgr" js-ui-menu-trigger>
                <i class="btn__seg ion ion-vitalfuntag"></i><span class="btn__seg btn__seg--txt">生活機能(可複選)</span>
            </button>
            <ul class="ui-nav-menu-opts">
                <li class="menu__fltr fltr-type__row">
                    <input type="checkbox" name="material[]" value="%公園%" title="公園">
                    <span class="menu__fltr__lbl">公園</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="checkbox" name="material[]" value="%市場%" title="市場">
                    <span class="menu__fltr__lbl">市場</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="checkbox" name="material[]" value="%超市%" title="超市">
                    <span class="menu__fltr__lbl">超市</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="checkbox" name="material[]" value="%夜市%" title="夜市">
                    <span class="menu__fltr__lbl">夜市</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="checkbox" name="material[]" value="%小吃店%" title="小吃店">
                    <span class="menu__fltr__lbl">小吃店</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="checkbox" name="material[]" value="%警察局%" title="警察局">
                    <span class="menu__fltr__lbl">警察局</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="checkbox" name="material[]" value="%停車場%" title="停車場">
                    <span class="menu__fltr__lbl">停車場</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="checkbox" name="material[]" value="%公車站%" title="公車站">
                    <span class="menu__fltr__lbl">公車站</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="checkbox" name="material[]" value="%醫療機構%" title="醫療機構">
                    <span class="menu__fltr__lbl">醫療機構</span>
                </li>
                <li class="menu__fltr fltr-type__row">
                    <input type="checkbox" name="material[]" value="%便利商店%" title="便利商店">
                    <span class="menu__fltr__lbl">便利商店</span>
                </li>
            </ul>
        </div>

        <div class="rslt__fltr__acts">
            <button  type="submit" class="btn__rds btn__prim btn-act--reset" id="Btn">
                <i class="btn__seg ion ion-ios-refresh-empty"></i><span class="btn__seg btn__seg--txt">search</span>
            </button>
        </div>


    </nav>
</form>

<script type="text/javascript">
    $("#Btn").on("click", function() {
        //window.location = "published.php";
        document.getElementById('search').submit();
        //window.location = "published_house_info.php";
    });
</script>
