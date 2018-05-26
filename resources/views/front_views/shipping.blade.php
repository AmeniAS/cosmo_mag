@extends('layouts.front_main')

@section('content')

    <!--Breadcumb area start here-->

    <section class="breadcumb-area af" style="background: url(images/breadcumb/1.jpg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="breadcumb-content">

                        <div class="breadcumb-title">

                            <h1>Méthode de paiement</h1>

                        </div>

                        <div class="breadcumb-link">

                            <ul>

                                {{--<li><a href="index.html">Home</a></li>

                                <li>-</li>

                                <li><a href="#">Men</a></li>

                                <li>-</li>--}}

                                <li><a href="#">Shipping Method</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Breadcumb area end here-->

    <!--Shipping area start here-->

    <section class="shipping-area section">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mr-b30">

                    <div class="button-area row">

                        <ul class="tab-nav" role="tablist">

                            <li class="active col-sm-4"><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab">01. Checkout</a></li>

                            <li class="col-sm-4"><a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab">02. Shipping Method</a></li>

                            <li class="col-sm-4"><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab">03.Payment</a></li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="tab-content">

                    <div class="tab-pane active" id="checkout">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="product-list">

                                <table>

                                    @foreach($shipping_products as $product)
                                        <tr>

                                            <td><img src="{{ asset($product->image) }}" alt=""/></td>

                                            <td>

                                                <div class="des-pro">

                                                    <h4>{{ $product->name }}</h4>
                                                    <p>{{ $product->brand->name }}</p>

                                                </div>

                                            </td>

                                            <td><strong>{{ $product->price }} Dt</strong></td>

                                            <td>

                                                <div class="order-pro order1">

                                                    <input value="{{ $product->pivot->quantity }}" />

                                                    <div class="btn-plus plus1"><span class="glyphicon glyphicon-plus"></span>

                                                    </div>

                                                    <div class="btn-minus minus1"><span class="glyphicon glyphicon-minus"></span>

                                                    </div>

                                                </div>

                                            </td>

                                            <td><span class="prize">$99.00</span></td>

                                            <td><i class="fa fa-times"></i></td>

                                        </tr>
                                    @endforeach

                                    <tr>

                                        <td><img src="images/product/1-sm.png" alt=""/></td>

                                        <td>

                                            <div class="des-pro">

                                                <h4>Nikki Winter jacket</h4><p>LifeStyle</p>

                                            </div>

                                        </td>

                                        <td><strong>$99</strong></td>

                                        <td>

                                            <div class="order-pro order1">

                                                <input value="01" />

                                                <div class="btn-plus plus1"><span class="glyphicon glyphicon-plus"></span>

                                                </div>

                                                <div class="btn-minus minus1"><span class="glyphicon glyphicon-minus"></span>

                                                </div>

                                            </div>

                                        </td>

                                        <td><span class="prize">$99.00</span></td>

                                        <td><i class="fa fa-times"></i></td>

                                    </tr>

                                    <tr>

                                        <td><img src="images/product/2-sm.png" alt=""/></td>

                                        <td>

                                            <div class="des-pro">

                                                <h4>Nikki Winter jacket</h4><p>LifeStyle</p>

                                            </div>

                                        </td>

                                        <td><strong>$99</strong></td>

                                        <td>

                                            <div class="order-pro order2">

                                                <input value="01" />

                                                <div class="btn-plus plus2"><span class="glyphicon glyphicon-plus"></span>

                                                </div>

                                                <div class="btn-minus minus2"><span class="glyphicon glyphicon-minus"></span>

                                                </div>

                                            </div>

                                        </td>

                                        <td><span class="prize">$99.00</span></td>

                                        <td><i class="fa fa-times"></i></td>

                                    </tr>

                                    <tr>

                                        <td><img src="images/product/3-sm.png" alt=""/></td>

                                        <td>

                                            <div class="des-pro">

                                                <h4>Nikki Winter jacket</h4><p>LifeStyle</p>

                                            </div>

                                        </td>

                                        <td><strong>$99</strong></td>

                                        <td>

                                            <div class="order-pro order3">

                                                <input value="01" />

                                                <div class="btn-plus plus3"><span class="glyphicon glyphicon-plus"></span>

                                                </div>

                                                <div class="btn-minus minus3"><span class="glyphicon glyphicon-minus"></span>

                                                </div>

                                            </div>

                                        </td>

                                        <td><span class="prize">$99.00</span></td>

                                        <td><i class="fa fa-times"></i></td>

                                    </tr>

                                </table>

                                <div class="total text-right">

                                    <span>Total Price :</span>

                                    <strong>$ 202.00</strong>

                                </div>

                                <div class="next-step text-center">

                                    <button>Next Step</button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane" id="shipping">

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <div class="form-area row">

                                <h3>Billing Information</h3>

                                <form>

                                    <fieldset>

                                        <div class="col-sm-6">

                                            <label>First Name *</label>

                                            <input type="text">

                                        </div>

                                        <div class="col-sm-6">

                                            <label>Last Name *</label>

                                            <input type="text">

                                        </div>

                                    </fieldset>

                                    <fieldset>

                                        <div class="col-sm-12">

                                            <label>Company Name</label>

                                            <input type="text">

                                        </div>

                                    </fieldset>

                                    <fieldset>

                                        <div class="col-sm-6">

                                            <label>E-mail Address * *</label>

                                            <input type="email">

                                        </div>

                                        <div class="col-sm-6">

                                            <label>Phone *</label>

                                            <input type="number">

                                        </div>

                                    </fieldset>

                                    <fieldset>

                                        <div class="col-sm-12">

                                            <label>Country</label>

                                            <select>

                                                <option>Select Your Country</option>

                                                <option>Bangladesh</option>

                                                <option>China</option>

                                                <option>USA</option>

                                            </select>

                                        </div>

                                    </fieldset>

                                    <fieldset>

                                        <div class="col-sm-12">

                                            <label>Address</label>

                                            <input type="text">

                                            <input type="text">

                                        </div>

                                    </fieldset>

                                    <fieldset>

                                        <div class="col-sm-12">

                                            <label>Town / City</label>

                                            <input type="text">

                                        </div>

                                    </fieldset>

                                    <fieldset>

                                        <div class="col-sm-6">

                                            <label>District *</label>

                                            <select>

                                                <option>Select Your District</option>

                                                <option>Dhaka</option>

                                                <option>Khulna</option>

                                                <option>Bagerhat</option>

                                            </select>

                                        </div>

                                        <div class="col-sm-6">

                                            <label>Postcode / ZIP</label>

                                            <input type="text">

                                        </div>

                                    </fieldset>

                                </form>

                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <div class="order-list">

                                <h3>Your Order</h3>

                                <table>

                                    <tr>

                                        <td>Product</td>

                                        <td>Total</td>

                                    </tr>

                                    <tr>

                                        <td>1. Nikki Mike Pro</td>

                                        <td>$ 99.00</td>

                                    </tr>

                                    <tr>

                                        <td>2. Nikki Mike Pro </td>

                                        <td>$ 59.00</td>

                                    </tr>

                                    <tr class="row-bold">

                                        <td>Subtotal</td>

                                        <td>$ 158.00</td>

                                    </tr>

                                    <tr class="row-bold">

                                        <td>Total</td>

                                        <td>$ 158.00</td>

                                    </tr>

                                </table>

                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 next-step text-center">

                            <button>Next Step</button>

                        </div>

                    </div>

                    <div class="tab-pane" id="payment">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="faq">
                                <div class="faq-content">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <span class="pd-l10">Direct Bank Tranfeer</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <span class="pd-l10"> Check Payments</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <span class="pd-l10">Cash On Delivery</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="next-step text-center">

                                <button>Next Step</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Shipping area end here-->

@endsection