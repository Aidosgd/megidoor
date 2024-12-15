@extends('app')

@section('slider')
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
@endsection

@section('content')
    <div class="ot-maincontent">
        <div class="ot-maincontent-i">
            <div style="clear: both;">
                <div id="system-message-container">
                </div>
            </div>
            <div class="ot-content content-full-leftfull-right">
                <div class="ot-bottom-content">
                    <div class="ot-bottom-content-i">
                        <div class="otModule module floatright width100 slide">
                            <div class="otModule-i">
                                <div class="otModuleContent-i clearfix">
                                    <div style="position:absolute;left:-5000px;">:</div>
                                    <div id="extraslider_wrapper14079489641508926419" class="extraslider-wrapper">
                                        <div class="extraslider-heading" style="display: none;">
                                            <div class="extraslider-control  ">
                                                <ul class="page-paging" style="margin:0px; padding:0px;">
                                                    <li id="previous_128" class="previous "></li>
                                                    <li id="paging_128" class="paging"></li>
                                                    <li id="next_128" class="next "></li>
                                                </ul>
                                            </div><!--end extraslider-control-->
                                        </div><!--end extraslider-heading-->


                                        <div class="extraslider-items-off">
                                            <div id="extraslider_items_inner_128-off row"
                                                 class="extraslider-items-inner">
                                                @foreach($doors->sortBy('weight') as $door)
                                                    <div class="{{ $door->category->id == 1 ? 'col-md-3' : 'col-md-4' }} col-sm-6 item-image item-image-spotlight">
                                                        <a href="/doors/{{ $door->category->slug }}/n/{{ $door->slug }}">
                                                            <img src="{{ $door->getSrc('doors') ? $door->getSrc('doors') : $door->images->first()->getSrc('doors') }}"
                                                                 alt="{{ $door->title }}" title="{{ $door->title }}">
                                                        </a>
                                                        <div class="item-info item-info-spotlight">
                                                            <div class="item-spotlight">
                                                                <div class="item-title">
                                                                    <a style="font-size: 16px;"
                                                                       href="/doors/{{ $door->category->slug }}/n/{{ $door->slug }}">
                                                                        {{ $door->title }}
                                                                    </a>
                                                                </div>
                                                                <!--end item-title-->

                                                                <div class="item-readmore">
                                                                    <a style="font-size: 16px;"
                                                                       href="/doors/{{ $door->category->slug }}/n/{{ $door->slug }}">
                                                                        {{ $door->price }}
                                                                    </a>
                                                                </div><!--end item-readmore-->
                                                            </div>
                                                            <div class="opacity"></div>
                                                        </div><!--end item-info-->
                                                    </div><!--end item-image-->
                                                @endforeach

                                            </div><!--end extraslider_items_inner-->
                                        </div><!--end extraslider-items-->


                                    </div><!--end sj_extra_wrapper-->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>

            <div class="custom">
                <p>
                <p>
                    Наша компания предлагает широкий ассортимент металлических и межкомнатных дверей. Перечень
                    продукции насчитывает более двух ста моделей. Представлены модели, выполненные в разных ключах
                    дизайнерской задумки — от строгого, классического стиля, до современного стиля модерн.
                    Ассортимент регулярно обновляется, дополняется свежими моделями. У нас Вы найдете широкий выбор
                    высококачественных дверей.
                    Хороший выбор представленных образцов, поможет вам сэкономить время — отпадёт необходимость
                    бегать в поисках нужной двери. Ставя на первую очередь комфорт покупателя, мы разместили на
                    своём сайте удобный каталог, поделённых на два раздела — металлические и межкомнатные двери.
                    Вся предлагаемая продукция соответствует высоким стандартам качества и отвечает мировым
                    требованиям. На всю продукцию действует гарантия в течение одного года.
                    Мы напрямую работаем с заводами-изготовителями России и Белоруссии. Это гарантирует высокое
                    качество и честную ценовую политику.
                    У нас можно прибрести продукцию не только в единичном порядке, но и оптом. Есть удобная
                    возможность заказать двери оптом Алматы цена, которых будет приемлемой для вас.
                    Благодаря многолетнему опыту работы, нашей организации удалось наладить поставку продукции по
                    всему Казахстану и открыть сеть филиалов во многих городах страны. Всё это улучшает
                    взаимодействие с потребителем и предоставляет ему больше удобства, для совершения покупки.
                    Постоянно совершенствуясь, мы учитываем пожелания потребителей и специалистов сферы, тем самым
                    улучшая качество сервиса. Нам важно, чтобы покупатель был доволен приобретенной у нас
                    продукцией. В этих целях, мы предоставляем дополнительные услуги по доставке дверей и их
                    установке. Наши специалисты произведут все необходимые замеры, если потребуется, то выполнят
                    демонтаж старых дверей и установят новые.
                    Почему стоит выбрать нас?
                    Щедрая скидочная система и дополнительные услуги.
                    Своевременная и безотлагательная доставка в любой город Казахстана.
                    Взаимовыгодные условия для совместного труда.
                    Наиболее полное консультирование по свойствам и техническим особенностям.
                    Высокие стандарты качества и полное соответствие им.
                    Наличие представленной на сайте продукции и её запасы на складах.
                    Удобный сервис и вежливое обслуживание.
                    Прямые поставки от заводов-изготовителей.
                    Высокопрофессиональный монтаж дверей, замеры и демонтаж.
                    Безусловное соблюдение гарантийных обязательств, обмен, возврат, в случае заводского брака.
                    Дверное ремесло для нас не ново, и наши сотрудники являются в нём профессионалами.
                    Профессиональный подход к дверям, отражается не только в отношении к делу, а во всех его
                    стадиях: начиная с консультации потребителя и заканчивая установкой дверей. Консультанты
                    магазина, мастера-установщики, водители доставки, логисты — все специалисты, работающие у нас,
                    призваны следовать одной цели — грамотно и в срок выполнить свои обязательства, предоставив
                    покупателю сервис и продукцию высшего качества!
                </p>
                </p>
            </div>

        </div>
    </div>
@endsection
