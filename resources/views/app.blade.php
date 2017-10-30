
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ isset($seo_title) ? $seo_title : 'Купить двери в Алматы. Заказать двери оптом в Алматы цена.' }}</title>
    <meta name="description" content="{{ isset($seo_description) ? $seo_description : 'Купить двери в Алматы недорого. Заказать двери оптом в Алматы цена. Лучший интернет магазин дверей онлайн оплата через карту. ' }}">
    <meta name="keywords" content="{{ isset($seo_keywords) ? $seo_keywords : 'двери в алматы купить двери цены двери двери на заказ двери оптом двери алматы дешево' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
    <link rel="stylesheet" href="/css/all.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!-- Favicon-->
    <link rel="shortcut icon" href="/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    @yield('head')
</head>
<body id="ot-body" class="isHomePage brown left-content-right">
    <div class="ot-wrap">
        <div class="ot-wrap-i">
            @include('parts.header')


            <!--******************** START MAINBODY ********************-->
                <div class="ot-mainbody">
                    <div class="ot-widthTemp">
                        <div class="ot-widthTemp-i">
                            <!--******************** START TOP-EXTEND ********************-->
                            <div class="ot-top-extend">
                                <div class="ot-top-extend-i">
                                    <div class="otModule module" style="float: left">
                                        <ul class="menu level0">
                                            <li style="display: inline-block; font-size: 18px;" id="item-510" class="level0">
                                                <a href="/">
                                                    <span>Главная</span>
                                                </a>
                                            </li>
                                            <li style="display: inline-block; font-size: 18px;" id="item-521" class="level0">
                                                <a href="/doors/metalicheskie-dveri/">
                                                    <span>Металлические двери</span>
                                                </a>
                                            </li>
                                            <li style="display: inline-block; font-size: 18px;" id="item-512" class="level0  last">
                                                <a href="/doors/mezhkomnatnye-dveri/">
                                                    <span>Межкомнатные двери</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="otModule module floatright">
                                        <div class="otModule-i">
                                            <div class="otModuleContent-i clearfix">
                                                <form class="default-search" action="/search" method="get">
                                                    <div class="search">
                                                        <input name="searchword"
                                                               id="mod-search-searchword"
                                                               maxlength="20"
                                                               class="inputbox"
                                                               type="text"
                                                               size="20"
                                                               placeholder="Поиск...">
                                                        <button class="btn"><img src="/css/images/search-btn.png" alt=""></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--******************** END TOP-EXTEND ********************-->
                            <div class="ot-mainbody-i">

                                <!--******************** START TOPBOXES ********************-->
                                @yield('slider')

                                <!--******************** END TOPBOXES ********************-->

                                @yield('content')


            @include('parts.footer')
        </div>
    </div>
    <div style="clear: both;"></div>
    <script src="/js/all.js"></script>
    @yield('scripts')
</body>

</html>