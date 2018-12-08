@extends('layouts.main')

@section('content')
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Contact Us</h2>
                        </div>

                        <form action="/contacts" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="" placeholder="Last Name" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" id="company" name="company" placeholder="Company Name" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea class="form-control w-100" id="message" name="message" cols="30" rows="10" placeholder="Leave your message and we will get back to you" required></textarea>
                                </div>
                            </div>
                            <div class="cart-btn mt-100">
                                <button type="submit" class="btn amado-btn w-100">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection