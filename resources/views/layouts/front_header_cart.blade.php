<li class="cart cart-area">

    <div class="hove">

        <i class="fa fa-shopping-cart"></i><p class="be"><span>0{{ $cart_products->count() }}</span></p>

        <div class="cart-list">

            <ul class="list">

                @foreach($cart_products as $cart_product)

                    <li style="width: 280px">

                        <a href="#" title="" class="cart-product-image floatleft"><img src="{{ asset('front_asset/images/blog/2-sm.jpg') }}" alt="Product"></a>

                        <div class="text">

                            <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>

                            <h4>{{ $cart_product->name }}</h4>

                            <div class="product-price">

                                <div class="price-old">{{ $cart_product->pivot->quantity }}</div>

                                <div class="price">{{ $cart_product->price }} Dt</div>

                            </div>

                        </div>

                    </li>

                    {{--<li>

                        <a href="#" title="" class="cart-product-image floatleft"><img src="{{ asset('front_asset/images/blog/1-sm.jpg') }}" alt="Product"></a>

                        <div class="text">

                            <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>

                            <h4>{{ $cart_product->name }}</h4>

                            <div class="product-price">

                                <div class="price-old">{{ $cart_product->pivot->quantity }}</div>

                                <div class="price">{{ $cart_product->price }} Dt</div>

                            </div>

                        </div>

                    </li>--}}

                @endforeach



                {{--<li>

                    <a href="#" title="" class="cart-product-image floatleft"><img src="{{ asset('front_asset/images/blog/2-sm.jpg') }}" alt="Product"></a>

                    <div class="text">

                        <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>

                        <h4>Legging Cathedral</h4>

                        <div class="product-price">

                            <div class="price-old"><del>$350.00</del></div>

                            <div class="price">$300.00</div>

                        </div>

                    </div>

                </li>

                <li>

                    <a href="#" title="" class="cart-product-image floatleft"><img src="{{ asset('front_asset/images/blog/3-sm.jpg') }}" alt="Product"></a>

                    <div class="text">

                        <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>

                        <h4>Legging Cathedral</h4>

                        <div class="product-price">

                            <div class="price">$50.00</div>

                        </div>

                    </div>

                </li>--}}

            </ul>

            <div class="total"><span class="left">Total:</span> <span class="right"></span></div>

            <div class="bottom">

                <a class="btn4" href="#" title="viewcart">Voir panier</a>

                <a class="btn4" href="#" title="checkout">Commander </a>

            </div>

        </div>

    </div>

</li>