@extends('app')
@section('head')
    <style>
        ul.custom{
            list-style: none;
            text-align: center;
            padding: 0;
            margin-bottom: 30px;
        }
        ul.custom li{
            display: inline-block;
            padding: 0 15px;
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
                                <div class="{{ $item->category->id == 1 ? 'col-md-3' : 'col-md-4' }} col-sm-6">
                                    <div class="shop-stuff shk-item three ">
                                        <div class="shop-stuff-b">
                                            <a href="/doors/{{ $item->category->slug }}/n/{{ $item->slug }}">
                                                <img class="shk-image" src="{{ $item->images->first()->getSrc('doors') }}" height="200">
                                            </a>
                                            <a href="/doors/{{ $item->category->slug }}/n/{{ $item->slug }}">
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

                    <p>Безопасность жилья — это одна из важных проблем  в условиях современности. Актуальной её делает высокая криминогенная обстановка в городах и участившиеся случаи взлома помещений злоумышленниками.</p>
                    <p>Этот вопрос всецело зависит от входных дверей в помещение и того, насколько они технически подготовлены к попыткам взлома. Технологии не стоят на месте, постоянно разрабатываются новые способы для повышения взломостойкости входных конструкций.</p><div><a href="javascript:collapsElement('identifikator')" title="">Читать далее</a><div id="identifikator" style="display: none"><p><strong>Металлические двери в Алматы</strong>, предлагаемые нашей компанией, в разы повышают уровень защищённости жилья.</p>
                            <p>Согласно статистике, в большинстве случаев, злоумышленники пытаются вскрыть дверь силовыми методами, так как не обладают достаточными знаниями для взлома самого замка.  При таком раскладе, у них никак не получиться взломать входную конструкцию высокого качества, изготовленную по всем стандартам.</p>
                            <p>Предлагаемая нами продукция изготавливается крупнейшими заводами России и Белоруссии, и соответствует всем требованиям взломостойкости, экологичности, звукоизоляции и т.п.  Данные двери не поддаются взлому при помощи силовых методов, включающих в себя применения ломов, монтировок, домкратов и т.д.  Специальные каплевидные петли на подшипниках не позволят выломать дверь подручными способами или с применением металлических рычагов. Это позволяет обезопасить жильё от большинства взломщиков. Дополнительным  методом  защиты служит бронепластина, устанавливаемая на дверь. Она эффективно противостоит высверливанию замка.</p>
                            <p>Качественные железные двери в Алматы в наличии на нашем складе, вы можете сделать заказ на сайте, либо посетив наш магазин.</p>
                            <p>Помимо надёжных петель и стального полотна, дверь оснащена специальными замками — сувальдным и цилиндровым.  Сувальдный замок снабжён пластинами (сувальдами), которые перемещаются строго определённым образом, под воздействием бороздок на ключе. Сложность вскрытия такого замка в том, что сувальды расположены глубоко внутри него и снаружи не имеют выступающих частей.</p>
                            <p>Цилиндровый замок  имеет в себе подвижные элементы, так называемые пины. Эти элементы взаимодействуя с определённым ключом, выстраиваются конкретным образом по высоте и занимаемому в цилиндре месту, что позволяет отпереть замок. Комбинация ключа уникальна и представляет собой единственно верное сочетание, отпирающее дверь. Качественный замок имеет несколько миллионов возможных комбинаций, что делает вероятность взлома при помощи отмычки равной нулю.</p>
                            <p>Стоит сказать, что двери низкого качества, как правило, снабжены цилиндровыми замками с небольшим количеством возможных комбинаций, а пины в них изготовлены из низкопробного материала. Стирание пинов приводит к тому, что они истираются и могут сработать с посторонним ключом или поддаться отмычке.</p>
                            <p>Это всё приводит к низкому уровню безопасности жилья, так как взломать некачественный замок не сложно даже неподкованному нарушителю.</p>
                            <p>Наша компания предлагает высокачественные замки сувальдного и цилиндрового типа, с большим количеством исходных комбинаций, изготовленные из качественных долгослужащих материалов.</p>
                            <p>Вы можете купить онлайн металлические <strong>входные двери в Алматы</strong>. Наша компания гарантирует хорошее качество и надёжность продукции. Наши двери —гарант безопасности помещения!</p></div></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function collapsElement(id) {
            if ( document.getElementById(id).style.display != "none" ) {
                document.getElementById(id).style.display = 'none';
            }
            else {
                document.getElementById(id).style.display = '';
            }
        }
    </script>
@endsection