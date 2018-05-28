@extends('layouts.front_main')

@section('custom_css')

    <style>

        .btn-black {
            background: black;
            color: white;
            border-radius: 0px;
        }

    </style>

@endsection

@section('content')

    <!--Services area start here-->

    <section class="services-area">

        <div class="container-fluid">

            <table class="table table-striped">

                @foreach($brands as $brand)

                    <tr>

                        <td>

                            <div class="col-sm-12 col-xs-12 accurate" style="max-width: 350px">

                                <div class="single-services services1 af">

                                    <figure>

                                        <img src="{{ asset($brand->logo) }}" width="350px" alt="" />

                                        {{--<div class="services-content">

                                            <h2>{{ $brand->name }}</h2>

                                            --}}{{--<p>Check Our New Collection</p>--}}{{--

                                        </div>--}}

                                    </figure>

                                </div>

                            </div>

                        </td>

                        <td>
                            <div class="row">

                                <div class="col-md-12">

                                    <h3>{{ $brand->name }}</h3>

                                    <h1>
                                        @if(Auth::guard('blogger')->check() || Auth::guard('web')->check())
                                            @if(Auth::guard($guard_name)->user()->hasVavoriteBrand($brand->id))
                                                <a href="{{ route('brands.toggleFavorite', $brand->id) }}"><i class="fa fa-heart"></i></a>
                                            @else
                                                <a href="{{ route('brands.toggleFavorite', $brand->id) }}"><i class="fa fa-heart-o"></i></a>
                                            @endif

                                        @else

                                            <a href="{{ route('brands.toggleFavorite', $brand->id) }}"><i class="fa fa-heart-o"></i></a>

                                        @endif
                                    </h1>

                                    <p>
                                        {{ $brand->description }}
                                    </p>

                                </div>

                            </div>

                        </td>

                        <td>
                            <div class="row">

                                <div class="col-md-12">

                                    <h4>{{ $brand->products->count() }} produits</h4>
                                    <p>
                                        <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-black">Afficher tous les produits</a>
                                    </p>

                                </div>

                            </div>

                        </td>

                    </tr>

                @endforeach

            </table>

            <div class="row">

                <div>

                    <div style="width: 300px; margin: 0 auto;">
                        {{ $brands->links('layouts.pagination_tpl') }}
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Services area end here-->

@endsection
