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
    <div class="ot-maincontent" style="padding: 40px">
        <div class="ot-maincontent-i">

            <div class="extraslider-items-off" style="width: 100%;">
                <div id="extraslider_items_inner_128-off " class="row extraslider-items-inner">
                    @forelse($doors->sortBy('weight') as $door)
                        <div class="col-md-3 col-sm-6 item-image item-image-spotlight">
                            <a href="/doors/{{ $door->category->slug }}/n/{{ $door->slug }}">
                                <img style="height: 300px; max-height: 300px" src="{{  $door->images->first()->getSrc('doors') }}"
                                     alt="{{ $door->title }}" title="{{ $door->title }}" >
                            </a>
                            <div class="item-info item-info-spotlight">
                                <div class="item-spotlight">
                                    <div class="item-title">
                                        <a href="/doors/{{ $door->category->slug }}/n/{{ $door->slug }}">
                                            {{ $door->title }}
                                        </a>
                                    </div>
                                    <!--end item-title-->

                                    <div class="item-readmore">
                                        <a href="/doors/{{ $door->category->slug }}/n/{{ $door->slug }}">
                                            {{ $door->price }}
                                        </a>
                                    </div><!--end item-readmore-->
                                </div>
                                <div class="opacity"></div>
                            </div><!--end item-info-->
                        </div><!--end item-image-->
                    @empty
                        <p>Ничего не найдено</p>
                    @endforelse

                </div><!--end extraslider_items_inner-->
            </div><!--end extraslider-items-->
        </div>
    </div>
@endsection
