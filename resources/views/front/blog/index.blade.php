@extends('layouts.front')

@section('style')
<style>
    .page-heading{
        background-image: url({{ $product->image }});
    }
</style>
@endsection

@section('intro')
<div class="page-heading">
    <div class="container">
        <div class="heading-content">
            <h1>Our <em>Blog</em></h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="blog-entries">
    <div class="container">
        <div class="col-md-9">
            <div class="blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-post">
                            <img src="img/blog_post_1.png" alt="">
                            <div class="text-content">
                                <span><a href="#">Admin</a> / <a href="#">16 September 2018</a> / <a href="#">Branding</a></span>
                                <h2>Duis mollis orci vel lectus</h2>
                                <p>Proin at augue quam. In laoreet arcu id lacus fringilla auctor. Etiam rutrum aliquet nisl, eu fermentum elit fermentum sed. Donec finibus urna sed sollicitudin egestas. In hac habitasse platea dictumst.
                                <br><br>Phasellus purus turpis, porta non lectus vitae, laoreet blandit diam. Suspendisse elementum ligula at purus gravida, vel malesuada dolor accumsan. Morbi finibus dapibus ex, ut finibus felis.</p>
                                <div class="simple-btn">
                                    <a href="{{ $product->file }}" download>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="blog-post">
                            <img src="img/blog_post_2.png" alt="">
                            <div class="text-content">
                                <span><a href="#">Admin</a> / <a href="#">28 August 2018</a> / <a href="#">Lifestyle</a></span>
                                <h2>Integer scelerisque odio elit</h2>
                                <p>Aliquam erat volutpat. Donec condimentum ante nec sapien sodales, ut molestie mauris scelerisque. Maecenas in turpis sed odio pretium tempor. In libero tellus, maximus in accumsan id, posuere non urna.
                                <br><br>Fusce ex elit, congue vitae interdum et, sodales vitae purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque id egestas nibh. Curabitur convallis cursus pharetra. Curabitur non ligula id lacus pulvinar sollicitudin. Etiam quis tempus lectus, sed iaculis ex.</p>
                                <div class="simple-btn">
                                    <a href="single-post.html">continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="blog-post">
                            <img src="img/blog_post_3.png" alt="">
                            <div class="text-content">
                                <span><a href="#">Admin</a> / <a href="#">31 July 2018</a> / <a href="#">Work Stuff</a></span>
                                <h2>Nulla condimentum at dui eu</h2>
                                <p>Cras ultrices ex sodales, vestibulum leo quis, volutpat mauris. In pretium vehicula dolor, sit amet ornare orci placerat sit amet. Nam non dolor sagittis, dignissim purus at, fringilla lacus. In aliquet, sapien ut lobortis molestie, lorem diam commodo leo, vitae eleifend diam justo ac velit.
                                <br><br>ras felis purus, efficitur vel luctus a, ultrices vitae diam. Maecenas maximus vehicula aliquet. Donec scelerisque, diam id dapibus ultrices, tortor tellus eleifend arcu, maximus iaculis mi elit sit amet odio. Donec at mauris sit amet velit tempus semper.</p>
                                <div class="simple-btn">
                                    <a href="single-post.html">continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="page-number">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="side-bar">
                <div class="search">
                    <fieldset>
                        <input name="search" type="text" class="form-control" id="search" placeholder="Search..." required="">
                    </fieldset>
                </div>
                <div class="archives">
                    <div class="sidebar-heding">
                        <h2>Archives</h2>
                    </div>
                    <ul>
                        <li><a href="#">> 2018 September (4)</a></li>
                        <li><a href="#">> 2018 August (16)</a></li>
                        <li><a href="#">> 2018 July (5)</a></li>
                        <li><a href="#">> 2018 May (3)</a></li>
                        <li><a href="#">> 2018 February (27)</a></li>
                        <li><a href="#">> 2017 December (18)</a></li>
                        <li><a href="#">> 2017 November (12)</a></li>
                    </ul>
                </div>
                <div class="recent-posts">
                    <div class="sidebar-heding">
                        <h2>Recent Posts</h2>
                    </div>
                    <ul>
                        <li><a href="single-post.html">
                            <img src="img/recent_post_1.png" alt="Recent Post 1">
                            <div class="text">
                                <h6>Duis mollis orci</h6>
                                <span>15 September 2018</span>
                            </div>
                        </li></a>
                        <li><a href="single-post.html">
                            <img src="img/recent_post_2.png" alt="Recent Post 2">
                            <div class="text">
                                <h6>Etiam quis tem</h6>
                                <span>10 August 2018</span>
                            </div>
                        </li></a>
                        <li><a href="single-post.html">
                            <img src="img/recent_post_3.png" alt="Recent Post 3">
                            <div class="text">
                                <h6>Proin at augue</h6>
                                <span>16 July 2018</span>
                            </div>
                        </li></a>
                    </ul>
                </div>
                <div class="categories">
                    <div class="sidebar-heding">
                        <h2>Categories</h2>
                    </div>
                    <ul>
                        <li><a href="#">> Lifestyle (7)</a></li>
                        <li><a href="#">> Branding (9)</a></li>
                        <li><a href="#">> Nature (14)</a></li>
                        <li><a href="#">> Work Stuff (6)</a></li>
                        <li><a href="#">> Science (5)</a></li>
                    </ul>
                </div>
                <div class="latest-gallery">
                    <div class="sidebar-heding">
                        <h2>Latest Gallery</h2>
                    </div>
                    <ul>
                        <li><a href="#"></a><img src="img/latest_gallery_1.png" alt=""></a></li>
                        <li><a href="#"></a><img src="img/latest_gallery_2.png" alt=""></a></li>
                        <li><a href="#"></a><img src="img/latest_gallery_3.png" alt=""></a></li>
                        <li><a href="#"></a><img src="img/latest_gallery_4.png" alt=""></a></li>
                        <li><a href="#"></a><img src="img/latest_gallery_5.png" alt=""></a></li>
                        <li><a href="#"></a><img src="img/latest_gallery_6.png" alt=""></a></li>
                        <li><a href="#"></a><img src="img/latest_gallery_7.png" alt=""></a></li>
                        <li><a href="#"></a><img src="img/latest_gallery_8.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
