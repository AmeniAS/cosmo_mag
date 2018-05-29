@extends('layouts.front_main')

@section('content')

    <!--Breadcumb area start here-->

    <section class="breadcumb-area af" style="background: url(images/breadcumb/1.jpg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="breadcumb-content">

                        <div class="breadcumb-title">

                            <h1>Panier</h1>

                        </div>

                        <div class="breadcumb-link">

                            <ul>

                                {{--<li><a href="index.html">Home</a></li>

                                <li>-</li>

                                <li><a href="#">Men</a></li>

                                <li>-</li>--}}

                                <li><a href="#">Passer Commande </a></li>

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

                            <li class="active col-sm-4"><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab">Panier </a></li>

                            <li class="col-sm-4"><a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab">Commander </a></li>

                            <li class="col-sm-4"><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab">Paiement </a></li>

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

                                                <div class="order-pro order{{ $loop->iteration }}">

                                                    <input value="{{ $product->pivot->quantity }}" disabled/>

                                                    {{--<div class="btn-plus plus{{ $loop->iteration }}"><span class="glyphicon glyphicon-plus"></span>

                                                    </div>

                                                    <div class="btn-minus minus{{ $loop->iteration }}"><span class="glyphicon glyphicon-minus"></span>

                                                    </div>--}}

                                                </div>

                                            </td>

                                            <td><span class="prize">{{ $product->price }}</span></td>

                                            <td>
                                                <a href="{{ route('products.remove_from_cart', $product->id) }}"><i class="fa fa-times"></i></a>
                                            </td>

                                        </tr>

                                    @endforeach

                                </table>

                                <div class="total text-right">

                                    <span>Total Price :</span>

                                    <strong>{{ $total_price }}</strong>

                                </div>

                                <div class="next-step text-center">

                                    <button>Continuer</button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane" id="shipping">

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <div class="form-area row">

                                <h3>Commande </h3>

                                <form>

                                    <fieldset>

                                        <div class="col-sm-6">

                                            <label>Prénom </label>

                                            <input type="text">

                                        </div>

                                        <div class="col-sm-6">

                                            <label>Nom</label>

                                            <input type="text">

                                        </div>

                                    </fieldset>

                                    {{--<fieldset>

                                        <div class="col-sm-12">

                                            <label>Company Name</label>

                                            <input type="text">

                                        </div>

                                    </fieldset>--}}

                                    <fieldset>

                                        <div class="col-sm-6">

                                            <label>E-mail </label>

                                            <input type="email">

                                        </div>

                                        <div class="col-sm-6">

                                            <label>Telephone </label>

                                            <input type="number">

                                        </div>

                                    </fieldset>

                                    <fieldset>

                                        <div class="col-sm-12">

                                            <label>Pays</label>

                                            <select>

                                                <option>sélectionnez votre pays</option>

                                                <option>Tunis</option>

                                                <option>France</option>

                                                <option>USA</option>

                                            </select>

                                        </div>

                                    </fieldset>

                                    <fieldset>

                                        <div class="col-sm-12">

                                            <label>Addresse</label>

                                            <input type="text">

                                            <input type="text">

                                        </div>

                                    </fieldset>

                                    <fieldset>

                                        <div class="col-sm-12">

                                            <label>Ville</label>

                                            <input type="text">

                                        </div>

                                    </fieldset>

                                    <fieldset>

                                        {{--<div class="col-sm-6">

                                            <label>District *</label>

                                            <select>

                                                <option>Select Your District</option>

                                                <option>Dhaka</option>

                                                <option>Khulna</option>

                                                <option>Bagerhat</option>

                                            </select>

                                        </div>--}}

                                        <div class="col-sm-6">

                                            <label>Code Postal</label>

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

                                    {{--{{ dd($cart_products) }}--}}

                                    @foreach($cart_products as $product)

                                        <tr>

                                            <td>{{ $product->name }}</td>

                                            <td>{{ $product->price * $product->pivot->quantity }}</td>

                                        </tr>

                                    @endforeach

                                    {{--<tr>

                                        <td>2. Nikki Mike Pro </td>

                                        <td>$ 59.00</td>

                                    </tr>

                                    <tr class="row-bold">

                                        <td>Subtotal</td>

                                        <td>$ 158.00</td>

                                    </tr>--}}

                                    <tr class="row-bold">

                                        <td>Total</td>

                                        <td>{{ $total_price }}</td>

                                    </tr>

                                </table>

                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 next-step text-center">

                            <button>Continuer </button>

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
                                                        <span class="pd-l10">Paiment par point d'affiliation</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <span class="pd-l10"> paiement par carte e-dinar </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <span class="pd-l10">paiement à la livraison</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="next-step text-center">

                                <button>Continuer </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Shipping area end here-->

@endsection