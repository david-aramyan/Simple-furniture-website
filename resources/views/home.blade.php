@extends('layouts.main')

@section('content')


    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
        @foreach($categories as $category)
            <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/products/{{$category->id}}">
                        <img src="{{asset($category->img)}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From ${{$category->startingPrice()}}</p>
                            <h4 style="color: white;">{{$category->name}}</h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Product Catagories Area End -->

@endsection