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
                </div></div>
            <div class="ot-content content-full-leftfull-right">
                <div class="ot-bottom-content">
                    <div class="ot-bottom-content-i">
                        <div class="otModule module floatright width100 slide">
                            <div class="otModule-i">
                                <div class="otModuleContent-i clearfix">
                                    <div style="position:absolute;left:-5000px;">: </div>
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
                                            <div id="extraslider_items_inner_128-off row" class="extraslider-items-inner">
                                                @forelse($doors->sortBy('weight') as $door)
                                                    <div class="col-md-3 col-sm-6 item-image item-image-spotlight">
                                                        <a href="/doors/{{ $door->category->slug }}/n/{{ $door->slug }}">
                                                            <img style="width: 100%" src="{{  $door->images->first()->getSrc('doors') }}"
                                                                 alt="{{ $door->title }}" title="{{ $door->title }}">
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


                                    </div><!--end sj_extra_wrapper-->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
