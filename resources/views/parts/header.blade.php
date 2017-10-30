<!--******************** START HEADER ********************-->
<div class="ot-header">
    <div class="ot-header-i">
        <div class="ot-widthTemp">
            <div class="ot-widthTemp-i">
                <div class="ot-logo">
                    <a href="/" class="logo"></a>
                </div>
                <div class="phone" style="float: left;padding: 10px 10px 0;font-size: 20px !important;color: rgb(255, 255, 255);">
                    <p>8 701 714-21-65, 8(727) 327-21-31</p>
                </div>
                <div class="ot-mainmenu">
                    <div id="ot-mainmenu" class="ot-mainmenu-i">
                        <ul class="menu level0">
                            <li id="item-510" class="level0">
                                <a href="/pages/news">
                                    <span>Новости</span>
                                </a>
                            </li>
                            <li id="item-521" class="level0">
                                <a href="/pages/sotrudnichestvo">
                                    <span>Сотрудничество</span>
                                </a>
                            </li>
                            <li id="item-512" class="level0  last">
                                <a href="/pages/kontakty">
                                    <span>Контакты</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session()->has('message'))
    <div class="alert alert-success">
        <h1 style="text-align: center">{{ session()->get('message') }}</h1>
    </div>
@endif
<!--******************** END HEADER ********************-->