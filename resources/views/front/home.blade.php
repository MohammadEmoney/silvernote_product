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

            <!-- single work -->
            <div class="col-md-3 col-sm-6  fashion logo">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ $products[0]->image }}" alt="{{ $products[0]->title }}" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>{{ $products[0]->title }}</span>
                                <em>{{ $products[0]->category->name }}</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 ads graphics">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ $products[1]->image }}" alt="{{ $products[1]->title }}" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>{{ $products[1]->title }}</span>
                                <em>{{ $products[1]->category->name }}</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-6 col-sm-12 photography">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ $products[2]->image }}" alt="{{ $products[2]->title }}" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>{{ $products[2]->title }}</span>
                                <em>{{ $products[2]->category->name }}</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 fashion ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ $products[3]->image }}" alt="{{ $products[3]->title }}" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>{{ $products[3]->title }}</span>
                                <em>{{ $products[3]->category->name }}</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 graphics ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ $products[4]->image }}" alt="{{ $products[4]->title }}" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>{{ $products[4]->title }}</span>
                                <em>{{ $products[4]->category->name }}</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-6 col-sm-12 photography">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ $products[5]->image }}" alt="{{ $products[5]->title }}" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>{{ $products[5]->title }}</span>
                                <em>{{ $products[5]->category->name }}</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 graphics ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ $products[6]->image }}" alt="{{ $products[6]->title }}" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>{{ $products[6]->title }}</span>
                                <em>{{ $products[6]->category->name }}</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 graphics ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ $products[7]->image }}" alt="{{ $products[7]->title }}" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>{{ $products[7]->title }}</span>
                                <em>{{ $products[7]->category->name }}</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 graphics ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ $products[8]->image }}" alt="{{ $products[8]->title }}" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>{{ $products[8]->title }}</span>
                                <em>{{ $products[8]->category->name }}</em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single work -->

            <!-- single work -->
            <div class="col-md-3 col-sm-6 graphics ads">
                <a href="single-project.html" class="portfolio_item">
                    <img src="{{ $products[9]->image }}" alt="{{ $products[9]->title }}" class="img-responsive" />
                    <div class="portfolio_item_hover">
                        <div class="portfolio-border clearfix">
                            <div class="item_info">
                                <span>{{ $products[9]->title }}</span>
                                <em>{{ $products[9]->category->title }}</em>
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
