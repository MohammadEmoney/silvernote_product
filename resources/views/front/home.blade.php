@extends('layouts.front')

@section('intro')
    <section class="box-intro">
            <div class="table-cell">
                <h1 class="box-headline letters rotate-2">
                    <span class="box-words-wrapper">
                        <b class="is-visible">design.</b>
                        <b>&nbsp;coding.</b>
                        <b>graphic.</b>
                    </span>
		        </h1>
                <h5>everything you need to build your personal portfolio</h5>
            </div>

            <div class="mouse">
                <div class="scroll"></div>
            </div>
        </section>
@endsection

@section('content')

<div class="portfolio-div">
    <div class="portfolio">
        <div class="no-padding portfolio_container">

            <!-- First Row -->
            {{-- @foreach($products[0] as $index => $product)
                <div class="col-md-{{ ($index == 2) ? '6' : '3'}} col-sm-6  fashion logo">
                    <a href="single-project.html" class="portfolio_item">
                        <img src="{{ $product->image }}" alt="{{ $product->title }}" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>{{ $product->title }}</span>
                                    <em>{{ $product->category->name }}</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            <!-- Second Row -->
            @foreach($products[1] as $index => $product)
                <div class="col-md-{{ ($index == 5) ? '6' : '3'}} col-sm-6  fashion logo">
                    <a href="single-project.html" class="portfolio_item">
                        <img src="{{ $product->image }}" alt="{{ $product->title }}" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>{{ $product->title }}</span>
                                    <em>{{ $product->category->name }}</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            @foreach($products[1] as $index => $product)
                <div class="col-md-3 col-sm-6  fashion logo">
                    <a href="single-project.html" class="portfolio_item">
                        <img src="{{ $product->image }}" alt="{{ $product->title }}" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>{{ $product->title }}</span>
                                    <em>{{ $product->category->name }}</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach --}}
            <!-- single work -->
            <div class="col-md-3 col-sm-6  fashion logo">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ asset('front/img/portfolio/01.jpg') }}" alt="image" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>Mockups in seconds</span>
                                <em>Fashion / Logo</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 ads graphics">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ asset('front/img/portfolio/03.jpg') }}" alt="image" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>Floating mockups</span>
                                <em>Ads / Graphics</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-6 col-sm-12 photography">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ asset('front/img/portfolio/02.jpg') }}" alt="image" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>Photorealistic smartwatch</span>
                                <em>Photography</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 fashion ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ asset('front/img/portfolio/04.jpg') }}" alt="image" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>Held by hands</span>
                                <em>Fashion / Ads</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 graphics ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ asset('front/img/portfolio/05.jpg') }}" alt="image" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>Mobile devices</span>
                                <em>Graphics / Ads</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-6 col-sm-12 photography">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ asset('front/img/portfolio/010.jpg') }}" alt="image" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>Photorealistic smartwatch</span>
                                <em>Photography</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 graphics ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ asset('front/img/portfolio/06.jpg') }}" alt="image" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>Mobile devices</span>
                                <em>Graphics / Ads</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 graphics ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ asset('front/img/portfolio/07.jpg') }}" alt="image" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>Mobile devices</span>
                                <em>Graphics / Ads</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 graphics ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ asset('front/img/portfolio/08.jpg') }}" alt="image" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>Mobile devices</span>
                                <em>Graphics / Ads</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 graphics ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ asset('front/img/portfolio/09.jpg') }}" alt="image" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>Mobile devices</span>
                                <em>Graphics / Ads</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->
        </div>
        <!-- end portfolio_container -->
    </div>
    <!-- portfolio -->
</div>
@endsection
