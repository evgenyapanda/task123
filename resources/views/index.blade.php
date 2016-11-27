@extends('layouts.layout')

@section('slades')
    <div id="slides">
        <div class="container clearfix">
            <div id="example">
                <ul class="bxslider">
                    <li>
                        <div class="slides_container clearfix">
                            <div class="slider-1 right clearfix">
                                <h1>design.</h1>
                                <h2>best & creative</h2>
                                <p>It’s a long established... fact that a reader will be distracte</p>
                                <button class="but">
                                    viev now
                                </button>
                                <button class="but">
                                    follow
                                </button>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="slides_container clearfix">
                            <div class="slider-1 right clearfix">
                                <h1>design.</h1>
                                <h2>best & creative</h2>
                                <p>It’s a long established... fact that a reader will be distracte</p>
                                <button class="but">
                                    viev now
                                </button>
                                <button class="but">
                                    follow
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="content clearfix">
        <div class="container clearfix">
            <h3>our Products</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
            <div class="menu clearfix">
                <ul>
                    <li><a href="#">all</a></li>
                    <li><a href="#">clothing</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">hat</a></li>
                    <li><a href="#">accessories</a></li>

                </ul>
            </div>
            @foreach($items as $item)
                <div class="item left">
                    <div class="item-img">
                        <div class="quick-view">
                            <button>Quick view</button>
                        </div>
                        <a href="#">
                            <img src="">
                        </a>
                    </div>

                    <div class="item-footer clearfix">
                        <p></p>
                    </div>
                    <span class="price left">{{ $item->price }}</span>
                    <span class="price-discount left"></span>
                    <div class="add clearfix">
                        <hr>
                        <a href="#" class="left">Add to cart</a>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
@endsection


