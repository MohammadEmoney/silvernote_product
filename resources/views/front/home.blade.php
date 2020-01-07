@extends('layouts.front')

@section('intro')
<div id="video-container">
    <div class="video-overlay"></div>
    <div class="video-content">
        <div class="inner">
          <h1>Welcome to <em>Corazon PSD</em></h1>
          <p>Best PSD Templates and Adobe's Products</p>
          <p>Glorious and magnificent work by best desinger in the world</p>
            <div class="scroll-icon">
                <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="{{ asset('front/img/scroll-icon.png') }}" alt=""></a>
            </div>
        </div>
    </div>
    <video autoplay="" loop="" muted>
        <source src="{{ asset('front/highway-loop.mp4') }}" type="video/mp4" />
    </video>
</div>
@endsection

@section('content')

<div class="full-screen-portfolio" id="portfolio">
    <div class="container-fluid">
        @foreach($products as $product)
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{ $product->image }}" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>{{ $product->category->name }}</h1>
                                <a href="{{ route('item.show', $product->id) }}"><p>{{ $product->title }}</p></a>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ $product->image }}">
                        </div>
                    </div></a>
                </div>
            </div>
        @endforeach
        {{-- <div class="col-md-4 col-sm-6">
            <div class="portfolio-item">
                <a href="{{ asset('front/img/big_portfolio_item_2.png') }}" data-lightbox="image-1"><div class="thumb">
                    <div class="hover-effect">
                        <div class="hover-content">
                            <h1>raclette <em>taxidermy</em></h1>
                            <p>Awesome Subtittle Goes Here</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('front/img/portfolio_item_2.png') }}">
                    </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="portfolio-item">
                <a href="{{ asset('front/img/big_portfolio_item_3.png') }}" data-lightbox="image-1"><div class="thumb">
                    <div class="hover-effect">
                        <div class="hover-content">
                            <h1>humblebrag <em>brunch</em></h1>
                            <p>Awesome Subtittle Goes Here</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('front/img/portfolio_item_3.png') }}">
                    </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="portfolio-item">
                <a href="{{ asset('front/img/big_portfolio_item_1.png') }}" data-lightbox="image-1"><div class="thumb">
                    <div class="hover-effect">
                        <div class="hover-content">
                            <h1>Succulents <em>chambray</em></h1>
                            <p>Awesome Subtittle Goes Here</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('front/img/portfolio_item_1.png') }}">
                    </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="portfolio-item">
                <a href="{{ asset('front/img/big_portfolio_item_5.png') }}" data-lightbox="image-1"><div class="thumb">
                    <div class="hover-effect">
                        <div class="hover-content">
                            <h1>freegan <em>aesthetic</em></h1>
                            <p>Awesome Subtittle Goes Here</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('front/img/portfolio_item_5.png') }}">
                    </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="portfolio-item">
                <a href="{{ asset('front/img/big_portfolio_item_6.png') }}" data-lightbox="image-1"><div class="thumb">
                    <div class="hover-effect">
                        <div class="hover-content">
                            <h1>taiyaki <em>vegan</em></h1>
                            <p>Awesome Subtittle Goes Here</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('front/img/portfolio_item_6.png') }}">
                    </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="portfolio-item">
                <a href="{{ asset('front/img/big_portfolio_item_7.png') }}" data-lightbox="image-1"><div class="thumb">
                    <div class="hover-effect">
                        <div class="hover-content">
                            <h1>Thundercats <em>santo</em></h1>
                            <p>Awesome Subtittle Goes Here</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('front/img/portfolio_item_7.png') }}">
                    </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="portfolio-item">
                <a href="{{ asset('front/img/big_portfolio_item_8.png') }}" data-lightbox="image-1"><div class="thumb">
                    <div class="hover-effect">
                        <div class="hover-content">
                            <h1>wayfarers <em>yuccie</em></h1>
                            <p>Awesome Subtittle Goes Here</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('front/img/portfolio_item_8.png') }}">
                    </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="portfolio-item">
                <a href="{{ asset('front/img/big_portfolio_item_9.png') }}" data-lightbox="image-1"><div class="thumb">
                    <div class="hover-effect">
                        <div class="hover-content">
                            <h1>disrupt <em>street</em></h1>
                            <p>Awesome Subtittle Goes Here</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('front/img/portfolio_item_9.png') }}">
                    </div>
                </div></a>
            </div>
        </div> --}}
    </div>
</div>

@endsection
