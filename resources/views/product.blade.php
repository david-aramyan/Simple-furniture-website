@extends('layouts.main')

@section('content')
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">

            {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                    {{--<nav aria-label="breadcrumb">--}}
                        {{--<ol class="breadcrumb mt-50">--}}
                            {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                            {{--<li class="breadcrumb-item"><a href="#">Furniture</a></li>--}}
                            {{--<li class="breadcrumb-item"><a href="#">Chairs</a></li>--}}
                            {{--<li class="breadcrumb-item active" aria-current="page">white modern chair</li>--}}
                        {{--</ol>--}}
                    {{--</nav>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url({{asset($product->images[0]->img)}});">
                                </li>
                                @if(count($product->images) > 1)
                                    @foreach($product->images as $image)
                                        @if ($loop->first) @continue @endif
                                        <li data-target="#product_details_slider" data-slide-to="{{$loop->index}}" style="background-image: url({{asset($image->img)}});">
                                        </li>
                                    @endforeach
                                @endif
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="gallery_img" href="{{asset($product->images[0]->img)}}">
                                        <img class="d-block w-100" src="{{asset($product->images[0]->img)}}" alt="">
                                    </a>
                                </div>
                                @if(count($product->images) > 1)
                                    @foreach($product->images as $image)
                                        @if ($loop->first) @continue @endif
                                        <div class="carousel-item">
                                            <a class="gallery_img" href="{{asset($image->img)}}">
                                                <img class="d-block w-100" src="{{asset($image->img)}}" alt="">
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_product_desc">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">${{$product->price}}</p>
                            <a href="#">
                                <h6>{{$product->name}}</h6>
                            </a>
                            <!-- Ratings & Review -->
                            <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <!-- Avaiable -->
                            @if($product->in_stock)
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                                @else
                                <p class="avaibility"><i class="fa fa-circle" style="color: red;"></i>Not In Stock</p>
                            @endif
                        </div>

                        <div class="short_overview my-5">
                            <p>{{$product->description}}</p>
                        </div>

                        <a href="/product/{{$product->id}}/order" class="btn amado-btn">Order now</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection