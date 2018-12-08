@extends('layouts.main')

@section('content')
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Order</h2>
                        </div>

                        <form action="/product/{{$product->id}}/order" method="post">
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
                                    <select class="w-100" id="country" name="country" required>
                                        <option value="usa">United States</option>
                                        <option value="cana">Canada</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control mb-3" id="address" name="address" placeholder="Address" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Town" value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code" value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Phone No" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea class="form-control w-100" id="comment" name="comment" cols="30" rows="10" placeholder="Leave a comment about your order"></textarea>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Order Total</h5>
                        <ul class="summary-table">
                            <li><span>subtotal:</span> <span>${{$product->price}}.00</span></li>
                            <li><span>delivery:</span> <span>$250.00</span></li>
                            <li><span>total:</span> <span>${{$product->price+250}}.00</span></li>
                        </ul>

                        <div class="payment-method">
                            <!-- Transfer -->
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="radio" class="custom-control-input" id="transfer" name="payment_method" value="transfer" checked>
                                <label class="custom-control-label" for="transfer">Bank Transfer</label>
                            </div>
                            <!-- Cash on delivery -->
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="radio" class="custom-control-input" id="cod" name="payment_method" value="cod">
                                <label class="custom-control-label" for="cod">Cash on Delivery</label>
                            </div>
                        </div>

                        <div class="cart-btn mt-100">
                            <button type="submit" class="btn amado-btn w-100">Order</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection