@extends('layout.app')

@section('title', 'cart')

@section('content')
<div class="section-lg">
    <div class="container">
        <div class="row col-spacing-40">
            <div class="col-12 col-xl-8">
                <table class="table cart-table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><a href="#">x</a></th>
                            <td class="product-thumbnail">
                                <a href="#"><img src="../assets/images/col-4-square.jpg" alt=""></a>
                            </td>
                            <td>Product name</td>
                            <td>$20.00</td>
                            <td>
                                <form class="product-quantity">
                                    <div class="qnt">
                                        <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">
                                    </div>
                                </form>
                            </td>
                            <td>$20.00</td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="#">x</a></th>
                            <td class="product-thumbnail">
                                <a href="#"><img src="../assets/images/col-4-square.jpg" alt=""></a>
                            </td>
                            <td>Product name</td>
                            <td>$20.00</td>
                            <td>
                                <form class="product-quantity">
                                    <div class="qnt">
                                        <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">
                                    </div>
                                </form>
                            </td>
                            <td>$20.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-xl-4">
                <div class="bg-grey padding-20 padding-md-30 padding-lg-40">
                    <h5 class="font-weight-medium">Cart totals</h5>
                    <table class="table cart-totals">
                        <tbody>
                            <tr>
                                <th scope="row">Subtotal</th>
                                <td>$20.00</td>
                            </tr>
                            <tr>
                                <th scope="row">Shipping</th>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                        Flat rate: $14.00
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                        Free shipping
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">
                                        Local pickup
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Total</th>
                                <td>$34.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="button button-md button-dark button-fullwidth margin-top-20" href="{{ route('checkout') }}">Proceed</a>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
@endsection
