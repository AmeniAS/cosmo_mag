@extends('layouts.front_main')

@section('content')

    <!--Services area start here-->

    <section class="services-area">

        <div class="container-fluid">

            <div class="row">

                @foreach($categories as $category)

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 accurate">

                        <div class="single-services services1 af">

                            <figure>

                                <img src="{{ asset($category->image) }}" alt=""/>

                                <div class="services-content">

                                    <h2>{{ $category->name }}</h2>

                                    <p>{{ \Illuminate\Support\Str::words($category->description, 25) }}</p>

                                </div>

                            </figure>

                        </div>

                    </div>

                @endforeach

            </div>

            <div class="row">

                <div>

                    <div style="width: 300px; margin: 0 auto;">
                        {{ $categories->links('layouts.pagination_tpl') }}
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Services area end here-->

@endsection
