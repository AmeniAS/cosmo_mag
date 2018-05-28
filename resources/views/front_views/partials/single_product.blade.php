<figure>
    <img class="normal" src="{{ $single_product->image }}" alt=""/>
    <img class="hover" src="{{ $single_product->image }}" alt=""/>
    <span class="product-position color1">New</span>
    <span class="price">{{ $single_product->price }} Dt</span>
    <ul>
        @if(Auth::guard('blogger')->check() || Auth::guard('web')->check())

            @if(Auth::guard('blogger')->check())

                @if(Auth::guard('blogger')->user()->hasVavoriteProduct($single_product->id))
                    <li><a href="{{ route('products.toggleFavorite', $single_product->id) }}"><i class="fa fa-heart"></i></a></li>
                @else
                    <li><a href="{{ route('products.toggleFavorite', $single_product->id) }}"><i class="fa fa-heart-o"></i></a></li>
                @endif

            @else

                @if(Auth::user()->hasVavoriteProduct($single_product->id))
                    <li><a href="{{ route('products.toggleFavorite', $single_product->id) }}"><i class="fa fa-heart"></i></a></li>
                @else
                    <li><a href="{{ route('products.toggleFavorite', $single_product->id) }}"><i class="fa fa-heart-o"></i></a></li>
                @endif

            @endif

        @else

            <li><a href="{{ route('products.toggleFavorite', $single_product->id) }}"><i class="fa fa-heart-o"></i></a></li>

        @endif

        <li><a href="{{ route('products.show', $single_product->id) }}"><i class="fa fa-eye"></i></a></li>
    </ul>
    <div class="product-des">
        <a href="{{ route('products.show', $single_product->id) }}"><h4>{{ $single_product->name }}</h4></a>
        <p>{{ $single_product->brand->name }}</p>
    </div>
</figure>