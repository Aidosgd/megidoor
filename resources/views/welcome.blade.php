@extends('app')

@section('content')
    <div class="ot-mainbody-i">

        <!--******************** START TOPBOXES ********************-->

        <div class="ot-topboxes" id="ot-topboxes">
            <div class="ot-topboxes-i" id="ot-topboxes-i" style="width: 100%">
                <div class="top-box top-box-1" style="width: 100%">
                    <div class="slider">
                        <div class="welcome-slider">
                            @foreach($sliders as $slider)
                                <div class="slide">
                                    <img src="/uploads/slider/{{ $slider->name }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--******************** END TOPBOXES ********************-->

        {{--<div class="ot-maincontent">--}}
            {{--<div class="ot-maincontent-i">--}}
                {{--<div style="clear: both;">--}}
                    {{--<div id="system-message-container">--}}
                    {{--</div></div>--}}
                {{--<div class="ot-content content-full-leftfull-right">--}}
                    {{--<div class="ot-top-content">--}}
                        {{--<div class="ot-top-content-i">--}}
                            {{--<!--													<h3 style="text-align: center;">Металлические двери</h3>-->--}}
                            {{--<div class="otModule module floatleft width21">--}}
                                {{--<div class="otModule-i">--}}
                                    {{--<h3><span class="title-module"><span class="first-word">Металлические</span> двери</span></h3>--}}
                                    {{--<div class="otModuleContent-i clearfix">--}}


                                        {{--<div class="custom">--}}
                                            {{--<p style="font-size: 11px; font-style: italic;"><span style="font-size: 100%;"><span style="color: #000000;"><span style="color: #000000; font-size: 100%;"><span style="color: #000000;">Широкий ассортимент&nbsp;<strong>металлических дверей</strong> позволяет удовлетворить запросы широкого круга потребителей. Различное в стилистическое исполнение, цветовая палитра внутренних панелей, качественная замочная фурнитура из Турции, России, Италии и широкий ценовой диапозон</span></span></span><span style="color: #000000;">. <br></span></span></p>--}}
                                            {{--<p style="font-weight: bold; font-style: italic;">Производители:</p>--}}
                                            {{--<ul class="menu">--}}
                                                {{--<li><a href="/index.php/shop-store/manufacturer/megi"><span class="B_crumbBox"><span class="B_lastCrumb"><span class="B_currentCrumb">Меги</span></span></span></a></li>--}}
                                                {{--<li><a href="/index.php/shop-store/manufacturer/leras"><span class="B_crumbBox"><span class="B_lastCrumb"><span class="B_currentCrumb">Leras</span></span></span></a></li>--}}
                                                {{--<li><a href="/index.php/shop-store/manufacturer/manufacturer-example"><span class="B_crumbBox"><span class="B_lastCrumb"><span class="B_currentCrumb">VALBERG</span></span></span></a></li>--}}
                                            {{--</ul></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="otModule module floatright width78 slide">--}}
                                {{--<div class="otModule-i">--}}
                                    {{--<div class="otModuleContent-i clearfix">--}}
                                        {{--<div style="position:absolute;left:-5000px;">: </div>         <style>--}}
                                            {{--.extraslider-items-inner .item-image{--}}
                                                {{--display: inline-block;--}}
                                                {{--width: 24%;--}}
                                                {{--position: relative;--}}
                                                {{--height: 350px;--}}
                                            {{--}--}}
                                            {{--..extraslider-items-inner .item-image a img{--}}
                                                {{--width: 200px;--}}
                                            {{--}--}}
                                            {{--.otModule.module.floatleft.width21{--}}
                                                {{--display: none;--}}
                                                {{--width: 0;--}}
                                            {{--}--}}
                                            {{--.otModule.module.floatright.width78.slide{--}}
                                                {{--width: 100%;--}}
                                            {{--}--}}
                                            {{--.extraslider-wrapper{--}}
                                                {{--width: 100% !important;--}}
                                            {{--}--}}
                                        {{--</style>--}}
                                        {{--<div id="extraslider_wrapper8941448531508926420" class="extraslider-wrapper">--}}
                                            {{--<div class="extraslider-heading" style="display: none;">--}}
                                                {{--<div class="extraslider-control  ">--}}
                                                    {{--<ul class="page-paging" style="margin:0px; padding:0px;">--}}
                                                        {{--<li id="previous_127" class="previous "></li>--}}
                                                        {{--<li id="paging_127" class="paging"></li>--}}
                                                        {{--<li id="next_127" class="next "></li>--}}
                                                    {{--</ul>--}}
                                                {{--</div><!--end extraslider-control-->--}}
                                            {{--</div><!--end extraslider-heading-->--}}


                                            {{--<div class="extraslider-items-off">--}}
                                                {{--<div id="extraslider_items_inner_127-off" class="extraslider-items-inner">--}}
                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-251-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/251-2.png" alt="Модель 251" title="Модель 251">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/model-251-detail">--}}
                                                                        {{--Модель 251                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-251-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-361-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/361-2.png" alt="Модель 361" title="Модель 361">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/model-361-detail">--}}
                                                                        {{--Модель 361                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-361-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-graf-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/graf-229.png" alt="Дверь  стальная Граф" title="Дверь  стальная Граф">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-graf-detail">--}}
                                                                        {{--Дверь  стальная Граф                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-graf-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/metallicheskaya-dver-kletka-klassik-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/kletka-dd.png" alt="Металлическая дверь - Клетка Классик" title="Металлическая дверь - Клетка Классик">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/metallicheskaya-dver-kletka-klassik-detail">--}}
                                                                        {{--Металлическая дверь - Клетка Классик                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/metallicheskaya-dver-kletka-klassik-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-160-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/160-2.png" alt="Модель 160" title="Модель 160">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/model-160-detail">--}}
                                                                        {{--Модель 160                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-160-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-292-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/292-2.png" alt="Модель 292" title="Модель 292">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/model-292-detail">--}}
                                                                        {{--Модель 292                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-292-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-734-dvuzstvorchataya-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/Image_69512.jpg" alt="Модель 734 Двузстворчатая" title="Модель 734 Двузстворчатая">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/model-734-dvuzstvorchataya-detail">--}}
                                                                        {{--Модель 734 Двузстворчатая                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-734-dvuzstvorchataya-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-graf-1200-dvukhstvorchataya-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/image_19_340x750.jpg" alt="Дверь  стальная Граф 1200(двухстворчатая)" title="Дверь  стальная Граф 1200(двухстворчатая)">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-graf-1200-dvukhstvorchataya-detail">--}}
                                                                        {{--Дверь  стальная Граф 1200(двухстворчатая)                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-graf-1200-dvukhstvorchataya-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/stalnaya-dver-standart-t-07-1250-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/image_148_340x750.jpg" alt="Стальная дверь Стандарт «Т-07» 1250" title="Стальная дверь Стандарт «Т-07» 1250">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/stalnaya-dver-standart-t-07-1250-detail">--}}
                                                                        {{--Стальная дверь Стандарт «Т-07» 1250                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/stalnaya-dver-standart-t-07-1250-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-427-arkaim-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/427-2.png" alt="Модель 427 Аркаим" title="Модель 427 Аркаим">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/model-427-arkaim-detail">--}}
                                                                        {{--Модель 427 Аркаим                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-427-arkaim-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-343-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/343-2.png" alt="Модель 343" title="Модель 343">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/model-343-detail">--}}
                                                                        {{--Модель 343                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-343-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-234-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/234-2.png" alt="Модель 234" title="Модель 234">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/model-234-detail">--}}
                                                                        {{--Модель 234                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-234-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-premer-luna-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/moon-dd.png" alt="Дверь  стальная Премьер Луна" title="Дверь  стальная Премьер Луна">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-premer-luna-detail">--}}
                                                                        {{--Дверь  стальная Премьер Луна                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-premer-luna-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-290-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/290-2.png" alt="Модель 290" title="Модель 290">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/model-290-detail">--}}
                                                                        {{--Модель 290                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-290-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-premer-tsvety-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/flower-dd.png" alt="Дверь стальная Премьер Цветы" title="Дверь стальная Премьер Цветы">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-premer-tsvety-detail">--}}
                                                                        {{--Дверь стальная Премьер Цветы                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-premer-tsvety-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/stalnaya-dver-standart-t-07-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/optima07-dd.png" alt="Стальная дверь Стандарт «Т-07»" title="Стальная дверь Стандарт «Т-07»">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/stalnaya-dver-standart-t-07-detail">--}}
                                                                        {{--Стальная дверь Стандарт «Т-07»                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/stalnaya-dver-standart-t-07-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/protivopozharnaya-dver-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/antifire-dd.png" alt="Противопожарная дверь" title="Противопожарная дверь">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/protivopozharnaya-dver-detail">--}}
                                                                        {{--Противопожарная дверь                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/protivopozharnaya-dver-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-181-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/181-2.png" alt="Модель 181" title="Модель 181">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/model-181-detail">--}}
                                                                        {{--Модель 181                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/model-181-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/stalnaya-dver-ekonom-t-03-1250-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/image_189_340x750.jpg" alt="Стальная дверь Эконом «Т-03» 1250" title="Стальная дверь Эконом «Т-03» 1250">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/stalnaya-dver-ekonom-t-03-1250-detail">--}}
                                                                        {{--Стальная дверь Эконом «Т-03» 1250                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/stalnaya-dver-ekonom-t-03-1250-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-premer-luna-1200-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/image_193.jpg" alt="Дверь стальная Премьер Луна 1200" title="Дверь стальная Премьер Луна 1200">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-premer-luna-1200-detail">--}}
                                                                        {{--Дверь стальная Премьер Луна 1200                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/metallicheskie-dveri/dver-stalnaya-premer-luna-1200-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                {{--</div><!--end extraslider_items_inner-->--}}
                                            {{--</div><!--end extraslider-items-->--}}


                                        {{--</div><!--end sj_extra_wrapper-->--}}


                                        			{{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="ot-content-i">--}}
                        {{--<!--												<h3 style="text-align: center;">Межкомнатные двери</h3>-->--}}
                        {{--<div class="blog-featured">--}}




                        {{--</div>--}}


                    {{--</div>--}}
                    {{--<div class="ot-bottom-content">--}}
                        {{--<div class="ot-bottom-content-i">--}}
                            {{--<div class="otModule module floatright width78 slide">--}}
                                {{--<div class="otModule-i">--}}
                                    {{--<div class="otModuleContent-i clearfix">--}}
                                        {{--<div style="position:absolute;left:-5000px;">: </div>         <style>--}}
                                            {{--.extraslider-items-inner .item-image{--}}
                                                {{--display: inline-block;--}}
                                                {{--width: 24%;--}}
                                                {{--position: relative;--}}
                                                {{--height: 350px;--}}
                                            {{--}--}}
                                            {{--..extraslider-items-inner .item-image a img{--}}
                                                {{--width: 200px;--}}
                                            {{--}--}}
                                            {{--.otModule.module.floatleft.width21{--}}
                                                {{--display: none;--}}
                                                {{--width: 0;--}}
                                            {{--}--}}
                                            {{--.otModule.module.floatright.width78.slide{--}}
                                                {{--width: 100%;--}}
                                            {{--}--}}
                                            {{--.extraslider-wrapper{--}}
                                                {{--width: 100% !important;--}}
                                            {{--}--}}
                                        {{--</style>--}}
                                        {{--<div id="extraslider_wrapper14079489641508926419" class="extraslider-wrapper">--}}
                                            {{--<div class="extraslider-heading" style="display: none;">--}}
                                                {{--<div class="extraslider-control  ">--}}
                                                    {{--<ul class="page-paging" style="margin:0px; padding:0px;">--}}
                                                        {{--<li id="previous_128" class="previous "></li>--}}
                                                        {{--<li id="paging_128" class="paging"></li>--}}
                                                        {{--<li id="next_128" class="next "></li>--}}
                                                    {{--</ul>--}}
                                                {{--</div><!--end extraslider-control-->--}}
                                            {{--</div><!--end extraslider-heading-->--}}


                                            {{--<div class="extraslider-items-off">--}}
                                                {{--<div id="extraslider_items_inner_128-off" class="extraslider-items-inner">--}}
                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/laminat-01-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/laminat-wenge.jpg" alt="Модель 01" title="Модель 01">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/laminat-01-detail">--}}
                                                                        {{--Модель 01                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/laminat-01-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/solo2015-02-24-05-12-01-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/Image_365.jpg" alt="Соло" title="Соло">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/solo2015-02-24-05-12-01-detail">--}}
                                                                        {{--Соло                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/solo2015-02-24-05-12-01-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/shponirovannaya-dver-grand-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/grand.jpg" alt="Гранд" title="Гранд">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/shponirovannaya-dver-grand-detail">--}}
                                                                        {{--Гранд                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/shponirovannaya-dver-grand-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/modern-lyuks-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/modern-luxe.jpg" alt="Модерн Люкс" title="Модерн Люкс">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/modern-lyuks-detail">--}}
                                                                        {{--Модерн Люкс                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/modern-lyuks-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/franchesko-dver-shpon-slonovaya-kost-dub-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/franchesko pg.jpg" alt="Франческо" title="Франческо">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/franchesko-dver-shpon-slonovaya-kost-dub-detail">--}}
                                                                        {{--Франческо                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/franchesko-dver-shpon-slonovaya-kost-dub-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/kristal-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/cristal1.png" alt="Кристал" title="Кристал">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/kristal-detail">--}}
                                                                        {{--Кристал                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/kristal-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/mirella-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/mirella pg beliy glyanec.jpg" alt="Мирелла" title="Мирелла">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/mirella-detail">--}}
                                                                        {{--Мирелла                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/mirella-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/jork-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/york-glass-door2.jpg" alt="Йорк" title="Йорк">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/jork-detail">--}}
                                                                        {{--Йорк                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/jork-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/dver-rafael-iz-massiva-sosny-v-almaty-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/rafael-1.png" alt="Рафаэль" title="Рафаэль">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/dver-rafael-iz-massiva-sosny-v-almaty-detail">--}}
                                                                        {{--Рафаэль                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/dver-rafael-iz-massiva-sosny-v-almaty-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/russo-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/russo.jpg" alt="Руссо" title="Руссо">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/russo-detail">--}}
                                                                        {{--Руссо                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/russo-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/lira-mezhkomnatnaya-shponirovannaya-dver-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/lira-stecl.jpg" alt="Лира" title="Лира">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/lira-mezhkomnatnaya-shponirovannaya-dver-detail">--}}
                                                                        {{--Лира                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/lira-mezhkomnatnaya-shponirovannaya-dver-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/versal-vanil-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/versal_poyl.jpg" alt="Версаль ваниль" title="Версаль ваниль">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/versal-vanil-detail">--}}
                                                                        {{--Версаль ваниль                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/versal-vanil-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/model-723-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/image_155.jpg" alt="Модель 723" title="Модель 723">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/model-723-detail">--}}
                                                                        {{--Модель 723                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/model-723-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/vetraz-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/vetrazvenge 2.png" alt="Ветразь" title="Ветразь">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/vetraz-detail">--}}
                                                                        {{--Ветразь                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/vetraz-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/shponirovannaya-dver-karolina-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/karolina.jpg" alt="Каролина" title="Каролина">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/shponirovannaya-dver-karolina-detail">--}}
                                                                        {{--Каролина                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/shponirovannaya-dver-karolina-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/landa-shponirovannaya-dver-tsveta-orekh-v-almaty-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/landa_oreh.jpg" alt="Ланда" title="Ланда">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/landa-shponirovannaya-dver-tsveta-orekh-v-almaty-detail">--}}
                                                                        {{--Ланда                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/landa-shponirovannaya-dver-tsveta-orekh-v-almaty-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                    {{--<div class="item-image item-image-spotlight">--}}
                                                        {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/milan-detail">--}}
                                                            {{--<img style="width: auto; max-height: 250px; margin: auto; display: block" src="/images/stories/virtuemart/product/milan go.jpg" alt="Милан" title="Милан">--}}
                                                        {{--</a>--}}
                                                        {{--<div class="item-info item-info-spotlight" style="position: absolute;--}}
                                                                    {{--bottom: 20px;--}}
                                                                    {{--left: 50%;--}}
                                                                    {{--width: 200px;--}}
                                                                    {{--transform: translateX(-50%);--}}
                                                                    {{--text-align: center;--}}
                                                                    {{--">--}}
                                                            {{--<div class="item-spotlight">--}}
                                                                {{--<div class="item-title">--}}
                                                                    {{--<a style="color: #333333; font-weight: bold;" href="/index.php/shop-store/mezhkomnatnye-dveri/milan-detail">--}}
                                                                        {{--Милан                            </a>                            </div><!--end item-title-->--}}


                                                                {{--<div class="item-readmore">--}}
                                                                    {{--<a href="/index.php/shop-store/mezhkomnatnye-dveri/milan-detail">--}}
                                                                        {{--Подробнее                                </a>--}}
                                                                {{--</div><!--end item-readmore-->--}}
                                                            {{--</div>--}}
                                                            {{--<div class="opacity"></div>--}}
                                                        {{--</div><!--end item-info-->--}}
                                                    {{--</div><!--end item-image-->--}}

                                                {{--</div><!--end extraslider_items_inner-->--}}
                                            {{--</div><!--end extraslider-items-->--}}


                                        {{--</div><!--end sj_extra_wrapper-->--}}


                                        			{{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="otModule module floatleft width21">--}}
                                {{--<div class="otModule-i">--}}
                                    {{--<h3><span class="title-module"><span class="first-word">Межкомнатные</span> двери</span></h3>--}}
                                    {{--<div class="otModuleContent-i clearfix">--}}


                                        {{--<div class="custom">--}}
                                            {{--<p style="font-size: 11px; font-style: italic;"><span style="font-size: 100%;"><span style="color: #000000;">Компания</span><strong><span style="color: #000000;">"МегиDOOR"</span><span style="color: #000000;">&nbsp;Алматы </span></strong><span style="color: #000000;">существует на рынке Казахстана с 2001 года и является одним из крупнейших импортеров <strong>межкомнатных дверей производства России и Беллорусии.</strong> <br></span></span></p>--}}
                                            {{--<p style="font-weight: bold; font-style: italic;">Производители:</p>--}}
                                            {{--<ul class="menu">--}}
                                                {{--<li><a href="#"><span class="B_crumbBox"><span class="B_lastCrumb"><span class="B_currentCrumb">Стройдетали</span></span></span></a></li>--}}
                                                {{--<li><a href="/index.php/shop-store/manufacturer/bekar"><span class="B_crumbBox"><span class="B_lastCrumb"><span class="B_currentCrumb">Бекар</span></span></span></a></li>--}}
                                                {{--<li><a href="/index.php/shop-store/manufacturer/belwooddoors"><span class="B_crumbBox"><span class="B_lastCrumb"><span class="B_currentCrumb">BELWOODDOORS</span></span></span></a></li>--}}
                                                {{--<li><a href="/index.php/shop-store/manufacturer/khales"><span class="B_crumbBox"><span class="B_lastCrumb"><span class="B_currentCrumb">Халес</span></span></span></a></li>--}}
                                                {{--<li><a href="/index.php/shop-store/manufacturer/dverlajn"><span class="B_crumbBox"><span class="B_lastCrumb"><span class="B_currentCrumb">ДверЛайн</span></span></span></a></li>--}}
                                                {{--<li><a href="/index.php/shop-store/manufacturer/lesozavod"><span class="B_crumbBox"><span class="B_lastCrumb"><span class="B_currentCrumb">Лесозавод</span></span></span></a></li>--}}
                                                {{--<li><a href="/index.php/avangard"><span class="B_crumbBox" style="text-decoration: underline;">Авангард</span></a></li>--}}
                                            {{--</ul></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div>--}}

                {{--<div class="custom">--}}
                    {{--<div style="padding: 20px;">--}}
                        {{--<p>Дом без дверей выглядит также нелепо, как и дерево без ветвей. Это известно априори и не требует доказательств. <strong>Купить двери в Алматы</strong> и других городах Казахстана не сложно. Однако трудно найти хорошее качество по приемлемой цене. Выход есть!</p>--}}
                        {{--<p>Наша организация — «МегиDOOR», уже более пятнадцати лет, предлагает широкий ассортимент металлических и межкомнатных дверей. Перечень продукции насчитывает более ста моделей. Представлены модели, выполненные в разных ключах дизайнерской задумки — от строгого, классического стиля, до современного стиля модерн. Ассортимент продукции регулярно обновляется, дополняется свежими моделями.</p>--}}
                        {{--<p>Хороший выбор представленных образцов, поможет вам сэкономить время — отпадёт необходимость бегать в поисках нужной двери. Ставя во главу угла комфорт покупателя, мы разместили на своём сайте удобный каталог продукции, поделённые на два раздела — стальные и межкомнатные двери.</p>--}}
                        {{--<p>Вся предлагаемая продукция соответствует высоким стандартам качества и отвечает мировым требованиям, предъявляемым к качеству исходного материала (древесине) и изделиям из него. На всю продукцию действует гарантия в течение одного года.</p>--}}
                        {{--<p>Таким образом, вы можете не опасаться того, что дверь выполнена с какими-либо отклонениями от высоких стандартов качества.</p>--}}
                        {{--<p>Мы напрямую работаем с заводами-изготовителями России и Белоруссии. Это гарантирует высокое качество продукции и честную ценовую политику. Вы приобретаете товар из первых рук, минуя перекупщиков и взвинченные цены.</p>--}}
                        {{--<p>У нас можно прибрести продукцию не только в единичном порядке, но и оптом. Есть удобная возможность заказать двери оптом Алматы цена, которых будет приемлемой для вас. Это хорошее предложение для тех, кто строит свой дом или работает в сфере строительства.</p>--}}
                        {{--<p>Наша компания открыта для сотрудничества со специалистами в строительной сфере. Талантливые дизайнеры, архитекторы, компании, специализирующиеся на строительстве, всегда в почёте у нас. Для того чтобы обговорить условия совместного труда, свяжитесь с нами, с помощью телефона или письма на имейл — будем рады дать ответы на все ваши вопросы!</p>--}}
                        {{--<p>Благодаря многолетнему опыту работы, нашей организации удалось наладить поставку продукции по всему Казахстану и открыть сеть филиалов во многих городах страны. Всё это улучшает взаимодействие с потребителем и предоставляет ему больше удобства, для совершения покупки.</p>--}}
                        {{--<p>Постоянно совершенствуясь, мы учитываем пожелания потребителей и специалистов сферы, тем самым улучшая качество сервиса. Нам важно, чтобы покупатель был доволен приобретенной у нас продукцией. В этих целях, мы предоставляем дополнительные услуги по доставке дверей и их установке. Наши специалисты произведут все необходимые замеры, если потребуется, то выполнят демонтаж старых дверей и установят новые.</p>--}}
                        {{--<p>Среди множества ресурсов, которые предлагает глобальная сеть, найти лучший <strong>интернет магазин дверей</strong> онлайн совсем непросто. Наш сайт обладает интуитивно понятным интерфейсом и удобен даже для неподкованного пользователя. Быстро и не выходя из дома, Вы можете выбрать подходящую вам товарную позицию и оформить заказ в пару кликов.</p>--}}
                        {{--<p>Для желающих лично удостовериться в качестве продукции функционирует обычный оффлайновый магазин. Здесь можно ознакомиться с предлагаемым ассортиментом и получить консультацию.</p>--}}
                        {{--<p>Мы будем рады Вас видет как на нашем сайте , так и в магазине!</p>--}}
                        {{--<p>Почему стоит выбрать нас?</p>--}}
                        {{--<ul>--}}
                            {{--<li>Щедрая скидочная система на продукцию и дополнительные услуги.</li>--}}
                            {{--<li>Своевременная и безотлагательная доставка продукции в любой город Казахстана.</li>--}}
                            {{--<li>Взаимовыгодные условия для совместного труда.</li>--}}
                            {{--<li>Наиболее полное консультирование по свойствам и техническим особенностям продукции.</li>--}}
                            {{--<li>Высокие стандарты качества продукции и полное соответствие им.</li>--}}
                            {{--<li>Наличие представленной на сайте продукции и её запасы на складах.</li>--}}
                            {{--<li>Удобный сервис и вежливое обслуживание.</li>--}}
                            {{--<li>Прямые поставки от заводов-изготовителей.</li>--}}
                            {{--<li>Высокопрофессиональный монтаж дверей, замеры и демонтаж.</li>--}}
                            {{--<li>Безусловное соблюдение гарантийных обязательств, обмен, возврат, в случае заводского брака.</li>--}}
                        {{--</ul>--}}
                        {{--<p>Перечисленные преимущества неукоснительно соблюдаются нашей организацией. Дверное ремесло для нас не ново, и наши сотрудники являются в нём профессионалами. Профессиональный подход к дверям, отражается не только в отношении к делу, а во всех его стадиях: начиная с консультации потребителя и заканчивая установкой дверей. Консультанты магазина, мастера-установщики, водители доставки, логисты — все специалисты, работающие у нас, призваны следовать одной цели — грамотно и в срок выполнить свои обязательства, предоставив покупателю сервис и продукцию высшего качества!</p>--}}
                    {{--</div></div>--}}

            {{--</div>--}}
        {{--</div>--}}
        <!--******************** START BOTTOMBOXES ********************-->
        {{--<div class="ot-bottomboxes" id="ot-bottomboxes">--}}
            {{--<div class="ot-bottomboxes-i" id="ot-bottomboxes-i">--}}
                {{--<div class="bottom-box bottom-box-1 firstbox width25">--}}
                    {{--<div class="otRounded module about">--}}
                        {{--<div class="otRounded-topLeft-bg"></div>--}}
                        {{--<div class="otRounded-topRight-bg"></div>--}}
                        {{--<div class="otRounded-mid" style="height: 161px;">--}}
                            {{--<h3><span class="title-module"><span class="first-word">о</span> нас</span></h3>--}}
                            {{--<div class="otRounded-mid-i">--}}
                                {{--<div class="otRounded-i">--}}
                                    {{--<div class="otModuleContent-i clearfix">--}}


                                        {{--<div class="custom">--}}
                                            {{--<div style="padding: 10px 0; font-style: italic;">Компания "МегиDOOR" Алматы существует на рынке Казахстана с 2001 года и является одним из крупнейших импортеров межкомнатных и входных дверей производства России и Беллорусии.</div>--}}
                                            {{--<p><a class="readmore" href="#">Подробнее</a></p></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="otRounded-bottomLeft-bg"></div>--}}
                        {{--<div class="otRounded-bottomRight-bg"></div>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="bottom-box bottom-box-2 midbox width25">--}}
                    {{--<div class="otRounded module service">--}}
                        {{--<div class="otRounded-topLeft-bg"></div>--}}
                        {{--<div class="otRounded-topRight-bg"></div>--}}
                        {{--<div class="otRounded-mid" style="height: 161px;">--}}
                            {{--<h3><span class="title-module"><span class="first-word">Карта</span> сайта</span></h3>--}}
                            {{--<div class="otRounded-mid-i">--}}
                                {{--<div class="otRounded-i">--}}
                                    {{--<div class="otModuleContent-i clearfix">--}}
                                        {{--<ul class="menu level0">--}}
                                            {{--<li id="item-435" class="current active level0  first"><a href="/"><span>Главная</span></a></li><li id="item-510" class="level0"><a href="/index.php/about-us"><span>Новости</span></a></li><li id="item-521" class="level0"><a href="/index.php/sotrudnichestvo"><span>Сотрудничество</span></a></li><li id="item-511" class="level0"><a href="/index.php/shop-store"><span>Каталог</span></a></li><li id="item-512" class="level0  last"><a href="/index.php/contact"><span>Контакты</span></a></li></ul>					</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="otRounded-bottomLeft-bg"></div>--}}
                        {{--<div class="otRounded-bottomRight-bg"></div>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="bottom-box bottom-box-3 midbox width25">--}}
                    {{--<div class="otRounded module newsletter">--}}
                        {{--<div class="otRounded-topLeft-bg"></div>--}}
                        {{--<div class="otRounded-topRight-bg"></div>--}}
                        {{--<div class="otRounded-mid" style="height: 161px;">--}}
                            {{--<h3><span class="title-module"><span class="first-word">Получать</span> новости</span></h3>--}}
                            {{--<div class="otRounded-mid-i">--}}
                                {{--<div class="otRounded-i">--}}
                                    {{--<div class="otModuleContent-i clearfix">--}}


                                        {{--<div class="custom">--}}
                                            {{--<div style="padding: 5px 0px 10px; font-style: italic;">Вы можете подписаться на наши новости оставив свой электронный адрес.</div>--}}
                                            {{--<div><form class="newsletter" action="index.php" method="post" accept-charset="utf-8"><input class="email" onfocus="if (this.value=='Введите Ваш Email') this.value='';" onblur="if (this.value=='') this.value='Введите Ваш Email';" type="text" name="email" value="Введите Ваш Email"> <input class="submit" type="submit" value="Подписаться"></form></div></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="otRounded-bottomLeft-bg"></div>--}}
                        {{--<div class="otRounded-bottomRight-bg"></div>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="bottom-box bottom-box-4 lastbox width25">--}}
                    {{--<div class="otRounded module">--}}
                        {{--<div class="otRounded-topLeft-bg"></div>--}}
                        {{--<div class="otRounded-topRight-bg"></div>--}}
                        {{--<div class="otRounded-mid" style="height: 161px;">--}}
                            {{--<h3><span class="title-module"><span class="first-word">Удобная</span> доставка</span></h3>--}}
                            {{--<div class="otRounded-mid-i">--}}
                                {{--<div class="otRounded-i">--}}
                                    {{--<div class="otModuleContent-i clearfix">--}}


                                        {{--<div class="custom">--}}
                                            {{--<div style="width: 100%; padding: 10px 0 15px; font-size: 16px; font-style: italic; color: #cf8639;"><img src="/images/demo/ship.png" border="0" alt="" style="float: left; margin-right: 7px;">Доставка в срок и с гарантией</div>--}}
                                            {{--<div style="width: 100%; padding: 10px 0; font-style: italic; border-top: 1px solid #716463;">Мы осуществляем доставку в любой город казахстана</div></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="otRounded-bottomLeft-bg"></div>--}}
                        {{--<div class="otRounded-bottomRight-bg"></div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!--******************** END BOTTOMBOXES ********************-->
    </div>
    <!--******************** START BOTTOM EXTENDS ********************-->
    <!--******************** END BOTTOM EXTENDS ********************-->
@endsection
