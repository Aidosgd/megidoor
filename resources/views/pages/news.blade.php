@extends('app')
@section('content')
    <div class="ot-maincontent">
        <div class="ot-maincontent-i">
            <div class="ot-content content-full-leftfull-right">
                <div class="ot-top-content">
                    <div class="ot-top-content-i">
                        <!--													<h3 style="text-align: center;">Металлические двери</h3>-->
                        <div class="otModule module breadcrumb">
                            <div class="otModule-i">
                                <div class="otModuleContent-i clearfix">
                                    <ul class="breadcrumb">
                                        <li><a href="{{ url('/') }}">Главная</a></li>
                                        <li>Новости</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="ot-content-i">

                    <div class="row">
                        <div id="text-page" class="col-md-12">
                            @foreach($news as $item)
                                <div id="news">
                                    <h2><a href="/news/{{ $item->slug }}">{{ $item->title }}</a></h2>
                                    <div class="introtext"><span class="date">{{ $item->created_at->format('d.m.Y') }}</span> {{ str_limit(strip_tags($item->description)) }}</div>
                                    <div class="readmore"><a href="/pages/{{ $item->slug }}">Читать дальше →</a></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection