@extends('layouts.front_main')

@section('content')

    <section class="best-product section">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="blog-heading">

                        <h1>Produits favoris</h1>

                    </div>

                </div>

            </div>

            <div class="row">

                @foreach(auth()->guard('blogger')->user()->product_favorites->slice(0, 3) as $favorite)

                    <div class="col-md-4">

                        <a href="{{ route('products.show', $favorite->product->id) }}">
                            <img class="img-responsive normal" src="{{ asset('storage/' . $favorite->product->image) }}" style="height: 212px;" height="270px" alt=""/>
                        </a>

                        <a href="{{ route('products.show', $favorite->product->id) }}">
                            <h3>{{ $favorite->product->name }}</h3>
                        </a>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

@endsection
