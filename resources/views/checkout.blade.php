@extends('layout.app')

@section('title', 'checkout')

@section('content')
<div class="section">
    <div class="container">
        <div class="row col-spacing-40">
            <div class="col-12 col-xl-8">
                <h5 class="font-weight-medium margin-bottom-30">Billing details</h5>
                <form>
                    <div class="form-row">
                        <div class="col-6">
                            <label class="required">Name</label>
                            <input type="text" required>
                        </div>
                        <div class="col-6">
                            <label class="required">Lastname</label>
                            <input type="text" required>
                        </div>
                        <div class="col-12">
                            <label>Company name (optional)</label>
                            <input type="text">
                        </div>
                        <div class="col-6">
                            <label class="required">Street address</label>
                            <input type="text" required>
                        </div>
                        <div class="col-6">
                            <label class="required">Town / City</label>
                            <input type="text" required>
                        </div>
                        <div class="col-6">
                            <label class="required">State</label>
                            <select class="custom-select w-100">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label class="required">ZIP</label>
                            <input type="text" required>
                        </div>
                        <div class="col-6">
                            <label class="required">Phone</label>
                            <input type="tel" required>
                        </div>
                        <div class="col-6">
                            <label class="required">Email address</label>
                            <input type="email" required>
                        </div>
                        <div class="col-12">
                            <label>Order notes (optional)</label>
                            <textarea placeholder="Notes about your order, eg. special notes for delivery."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-xl-4">
                <div class="bg-grey padding-20 padding-md-30 padding-lg-40">
                    <h5 class="font-weight-medium">Your order</h5>
                    <table class="table cart-totals">
                        <tbody>
                            <tr>
                                <th scope="row">Product name x 1</th>
                                <td>$20.00</td>
                            </tr>
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
                    <a class="button button-md button-dark button-fullwidth margin-top-20" href="#">Place order</a>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
@endsection
