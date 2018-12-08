@extends('layouts.main')

@section('content')

    <div class="shop_sidebar_area">

        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Catagories</h6>

            <!--  Catagories  -->
            <div class="catagories-menu">
                <ul>
                    <li @if(Request::is('products')) class="active" @endif><a href="/products">All</a></li>
                    @foreach($categories as $category)
                        <li @if(Request::is('products/'.$category->id)) class="active" @endif><a href="/products/{{$category->id}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="amado_product_area section-padding-100">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                        <!-- Total Products -->
                        <div class="total-products">
                            <p>Showing {{$products->firstItem()}}-{{$products->lastItem()}} Of {{$products->count()}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            @foreach($products as $product)
                <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <a href="#">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{asset($product->images[0]->img)}}" alt="">
                                    <!-- Hover Thumb -->
                                    @if(count($product->images) > 1)
                                        <img class="hover-img" src="{{asset($product->images[1]->img)}}" alt="">
                                    @endif
                                </div>

                                <!-- Product Description -->
                                <div class="product-description d-flex align-items-center justify-content-between">
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <p class="product-price">${{$product->price}}</p>
                                        <h6>{{$product->name}}</h6>
                                    </div>
                                    <!-- Ratings & Cart -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{$products->links()}}
        </div>
    </div>

@endsection