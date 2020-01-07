@extends('layouts.front')

@section('style')
{{-- {{ dd($product->image) }} --}}
<style>
    .page-heading{
        background-image: url("{{ asset(str_replace('\\', '/', $product->bg_img)) }}");
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
<div class="blog-entries" dir="rtl">
    <div class="container">
        <div class="col-md-9">
            <div class="blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-post">
                            <img class="big_image" src="{{ $product->image }}" alt="{{ $product->title }}">
                            <ul id="lightSlider">
                                <li>
                                    <img class="thumbnail" src="{{ $product->image }}" alt="{{ $product->title }}">
                                </li>
                                @if($product->gallery !== '""')
                                    @foreach(json_decode($product->gallery) as $img)
                                        <li>
                                            <img class="thumbnail" src="{{ $img }}" alt="{{ $product->title }}">
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                            <div class="text-content">
                                <span><a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a> / <a href="#">{{ $product->updated_at }}</a> / <a href="{{ route('categories.show', $product->category->id) }}">{{ $product->category->name }}</a></span>
                                <h2>{{ $product->title }}</h2>
                                <p>{!! $product->description !!}</p>
                                <div class="simple-btn">
                                    <a href="{{ $product->file }}" download>Download</a> <p>قیمت: <span>{{ $product->price }} تومان</span> <span><strike>{{ $product->getDiscount($product->price, $product->discount) }}</strike></span></p>
                                    <div class="password-field">
                                        <p>Password: <span id="password">{{ request()->getHost() }}</span></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        {{-- Suggestions --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            @component('front.blog.components.sidebar')

            @endcomponent
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>

        // var password = document.getElementById("password");
        // password.onclick = function(){
        //     var copyText = document.getElementById("password");
        //     copyText.select();
        //     copyText.setSelectionRange(0, 99999);
        //     document.execCommand("copy");
        // };



         $(document).ready(function() {
            //Copy to Clipboard
            // $('#password').on('click', (e)=>{
            //     let text = $('#password').text();
            //     let selectText = $('#password').select();

            //     console.log(text);
            // })

            $("#lightSlider").lightSlider({
                item: 3,
                autoWidth: false,
                slideMove: 1, // slidemove will be 1 if loop is true
                slideMargin: 10,

                addClass: '',
                mode: "slide",
                useCSS: true,
                cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
                easing: 'linear', //'for jquery animation',////

                speed: 400, //ms'
                auto: false,
                loop: true,
                slideEndAnimation: true,
                pause: 2000,

                keyPress: false,
                controls: true,
                prevHtml: '',
                nextHtml: '',

                rtl:true,
                adaptiveHeight:false,

                vertical:false,
                verticalHeight:500,
                vThumbWidth:100,

                thumbItem:10,
                pager: true,
                gallery: false,
                galleryMargin: 5,
                thumbMargin: 5,
                currentPagerPosition: 'middle',

                enableTouch:false,
                enableDrag:false,
                freeMove:true,
                swipeThreshold: 40,

                responsive : [],

                onBeforeStart: function (el) {},
                onSliderLoad: function (el) {},
                onBeforeSlide: function (el) {},
                onAfterSlide: function (el) {},
                onBeforeNextSlide: function (el) {},
                onBeforePrevSlide: function (el) {}
            });

            $('.thumbnail').on('click' , function(e){
                e.preventDefault();
                $('.big_image').attr('src', $(this).attr('src'))
            })
        });
    </script>
@endsection
