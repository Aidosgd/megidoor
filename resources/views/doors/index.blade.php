@extends('app')
@section('head')
    <style>
        ul.custom {
            list-style: none;
            text-align: center;
            padding: 0;
            margin-bottom: 30px;
        }

        ul.custom li {
            display: inline-block;
            padding: 0 15px;
        }

        .door-height {
            min-height: 470px;
        }
    </style>
@endsection
@section('content')
    <div class="ot-maincontent">
        <div class="ot-maincontent-i">
            <div class="ot-content content-full-right">
                <div class="ot-content-i">
                    <div class="browse-view">
                        <div class="category-title">
                            <h1>{{ $doorCategory->name }}</h1>
                        </div>
                        <div class="row doors">
                            @foreach($doors->sortBy('weight') as $item)
                                <div class="{{ $item->category->id == 1 ? 'col-md-3' : 'col-md-4' }} col-sm-6 door-height">
                                    <div class="shop-stuff shk-item three ">
                                        <div class="shop-stuff-b">
                                            @if(!empty($item->images->first()))
                                                <a href="/doors/{{ $item->category->slug }}/n/{{ $item->slug }}">
                                                    <img class="shk-image"
                                                         src="{{ $item->images->first()->getSrc('doors') }}"
                                                         height="300">
                                                </a>
                                            @endif
                                            <a style="font-size: 16px;"
                                               href="/doors/{{ $item->category->slug }}/n/{{ $item->slug }}">
                                                <h3>{{ $item->title }}</h3>
                                                <h4>{{ $item->price }}</h4>
                                            </a>
                                            <div class="shs-descr">

                                                <br>
                                                <div style="clear:both;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div><!-- end browse-view -->

                    @if ($doorCategory->name == 'Межкомнатные двери')
                        <!-- Текст для категории Межкомнатные двери -->
                        <!--<h1>mej</h1>-->
                        <p><strong><big>Межкомнатные двери.</big></strong></p>

                        <p>Современные межкомнатные двери по стилевому исполнению можно классифицировать на три основных
                            типа:
                            Модерн - современные двери, но еще без уклонов хай-тек. Их конструкция одновременно
                            совмещает прямые руленые линии и легкое «скругление»;
                            Хайтек , основные отличия, которые выступают очень резкие прямые линии, использование
                            стекла для декора, футуристичность дизайна;
                            Классика - ненавязчивое оформление превосходно подходит для различных дизайнерских решений
                            в интерьере .
                            Профессиональные дизайнеры отдают предпочтения дверям модерн , так как, в большинстве
                            случаев, обустройство помещений совершается современной мебелью, имеющей схожую стилистику. 
                            Двери хай-тек лаконичны для интерьера, оформленного в стиле минимализма, однако, многие
                            покупатели, решившие остановить на них свой выбор, забывают о том, что кроме пары столиков в
                            комнатах, наверняка, будет присутствовать и иная мебель. Таким образом, к данному варианту
                            стоит подходить более внимательно.
                            Возвращаясь к дверям в стиле модерн, стоит акцентировать внимание на то, что они лаконичны к
                            современной мебели, не теряются на их фоне и графически рифмуются.
                            Двери в классическом стиле для оформления современного интерьера - они превосходны для
                            императорского дворцового стиля, а в других случаях выглядят несоразмерно и теряют свой
                            презентабельный вид. 
                            Важным моментом при выборе двери является определение оптимального варианта покрытия. Данный
                            фактор зависит от возможности сохранения презентабельного внешнего вида на долгий срок
                            службы. 
                            Большинство клиентов отдают предпочтение светлым дверям, не съедают пространство и выглядят
                            презентабельно.
                        </p>

                    @elseif ($doorCategory->name == 'Металлические двери')
                        <p>
                            Металлические двери в Алматы, предлагаемые нашей компанией, в разы повышают уровень защищённости жилья.
                            Предлагаемая нами продукция изготавливается крупнейшими заводами России и Белоруссии, и соответствует всем требованиям взломостойкости, экологичности, звукоизоляции и т.п. Данные двери не поддаются взлому при помощи силовых методов, включающих в себя применения ломов, монтировок, домкратов и т.д. Специальные каплевидные петли на подшипниках не позволят выломать дверь подручными способами или с применением металлических рычагов. Это позволяет обезопасить жильё от большинства взломщиков. Дополнительным методом защиты служит броненакладка, устанавливаемая на дверь. Она эффективно противостоит высверливанию замка.
                            Качественные железные двери в Алматы в наличии на нашем складе, вы можете сделать заказ на сайте, либо посетив наш магазин.
                            Помимо надёжных петель и стального полотна, дверь оснащена специальными замками — сувальдным и цилиндровым. Сувальдный замок снабжён пластинами (сувальдами), которые перемещаются строго определённым образом, под воздействием бороздок на ключе. Сложность вскрытия такого замка в том, что сувальды расположены глубоко внутри него и снаружи не имеют выступающих частей.
                            Цилиндровый замок имеет в себе подвижные элементы, так называемые пины. Эти элементы взаимодействуя с определённым ключом, выстраиваются конкретным образом по высоте и занимаемому в цилиндре месту, что позволяет отпереть замок. Комбинация ключа уникальна и представляет собой единственно верное сочетание, отпирающее дверь. Качественный замок имеет несколько миллионов возможных комбинаций, что делает вероятность взлома при помощи отмычки равной нулю.
                            Вы можете купить онлайн металлические входные двери в Алматы. Наша компания гарантирует хорошее качество и надёжность продукции. Наши двери —гарант безопасности помещения!
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function collapsElement(id) {
            if (document.getElementById(id).style.display != "none") {
                document.getElementById(id).style.display = 'none';
            } else {
                document.getElementById(id).style.display = '';
            }
        }
    </script>
@endsection