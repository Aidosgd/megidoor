@extends('app')
@section('content')
    <div class="ot-maincontent">
        <div class="ot-maincontent-i">
            <div class="ot-content content-full-right">
                <div class="ot-top-content">
                    <div class="ot-top-content-i">
                        <!--                                                                                       <h3 style="text-align: center;">Металлические двери</h3>-->
                        <div class="otModule module breadcrumb">
                            <div class="otModule-i">
                                <div class="otModuleContent-i clearfix">
                                    <ul class="breadcrumb">
                                        <li><a href="{{ url('/') }}">Главная</a></li>
                                        <li><a href="/doors/{{ $doorCategory->slug }}">{{ $doorCategory->name }}</a></li>
                                        <li>{{ $door->title }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ot-content-i">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row product__main">
                                <div class="col-sm-5" style="padding-top: 40px;">
                                    <div class="mainImage">
                                        <a class="image_js hidden-xs"  href="/uploads/doors/{{ $door->images->first()->name }}">
                                            <img style="height: 350px" src="/uploads/doors/{{ $door->images->first()->name }}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="row product__thumbs" style="margin-top: 50px; padding: 0 15px;">
                                        @foreach($door->images as $index => $image)
                                            <div style="display: inline-block;padding-right: 15px;margin-bottom: 15px;">
                                                <a href="/uploads/doors/{{ $image->name }}" class="image_js thumb group1 {{ $index == 0 ? 'active' : '' }}">
                                                    <img style="max-height: 150px" src="/uploads/doors/{{ $image->name }}" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product__details">
                                        <h1 class="product__heading">{{ $door->title }}</h1>
                                        <h4>Описание</h4>
                                        {!! $door->description !!}

                                        <h4>Цена:</h4>
                                        <h4>{{ $door->price }} тенге {{$door->category->id == 1 ? 'цена за комплект' : ''}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(".image_js").colorbox({rel:'image_js', width: '500px'});
    </script>
@endsection