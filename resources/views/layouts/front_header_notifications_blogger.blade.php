<li class="cart cart-area">

    <div class="hove">

        <i class="fa fa fa-heart"></i><p class="be"><span>0{{ auth()->guard('blogger')->user()->unreadNotifications->count() }}</span></p>

        <div class="cart-list">

            <ul class="list">

                @foreach(auth()->guard('blogger')->user()->unreadNotifications as $notification)

                    {{--{{ dd($notification) }}--}}

                    <li style="width: 280px">

                        <a href="#" title="" class="cart-product-image floatleft">
                            <img src="{{ asset('storage/' . $notification['data']['product']['image']) }}" alt="Product">
                        </a>

                        <div class="text">

                            <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>

                            <h4>{{ $notification['data']['brand']['name'] }}</h4>

                            <div class="product-price">

                                <div class="price-old">a ajouté un nouveau produit</div>

                                <div class="price">{{ $notification['data']['product']['name'] }}</div>

                            </div>

                        </div>

                    </li>

                @endforeach

            </ul>

        </div>

    </div>

</li>