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

                @foreach($bloggers as $blogger)

                    <tr>

                        <td>

                            <div class="col-sm-12 col-xs-12 accurate" style="max-width: 350px">

                                <div class="single-services services1 af">

                                    <figure>

                                        <img src="{{ asset($blogger->image) }}" width="350px" alt="" />

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

                                    <h1>
                                        {{ $blogger->name }}
                                    </h1>

                                    {{--<h3>{{ $blogger->name }}</h3>--}}
                                    <h4>
                                        {{ $blogger->media_images->count() }} images /
                                        {{ $blogger->media_videos->count() }} videos /
                                        {{ $blogger->articles->count() }} articles
                                    </h4>
                                    {{--<h4>{{ $blogger->media_videos->count() }} videos</h4>
                                    <h4>{{ $blogger->articles->count() }} articles</h4>--}}

                                </div>

                            </div>

                        </td>

                        <td>
                            <div class="row">

                                <div class="col-md-12">

                                    <p>
                                        <a href="{{ route('bloggers.show', $blogger->id) }}" class="btn btn-black">Afficher le profil</a>
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
                        {{ $bloggers->links('layouts.pagination_tpl') }}
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Services area end here-->

@endsection
