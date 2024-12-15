@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
    <div class="row">
        <div class="ot-maincontent">
            <div class="ot-maincontent-i">
                <div style="clear: both;">
                    <div id="system-message-container">
                    </div></div>
                <div class="ot-content content-full-leftfull-right">
                    <div class="ot-top-content">
                        <div class="ot-top-content-i">
                            <!--													<h3 style="text-align: center;">Металлические двери</h3>-->
                            <div class="otModule module breadcrumb">
                                <div class="otModule-i">
                                    <div class="otModuleContent-i clearfix">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ url('/') }}">Главная</a></li>
                                            <li>{{ $pageName->title }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ot-content-i">
                        <div class="item-page">
                            <div class="item-page-bg">
                                <div class="heading-actions">
                                    <h2 class="heading-title">{{ $pageName->title }}</h2>
                                </div>

                                {!! $pageName->description !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection