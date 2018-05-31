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

                @foreach($articles as $article)

                    <tr>

                        <td>

                            <div class="col-sm-12 col-xs-12 accurate" style="max-width: 350px">

                                <div class="single-services services1 af">

                                    <figure>

                                        <img src="{{ asset($article->image) }}" width="350px" alt="" />

                                    </figure>

                                </div>

                            </div>

                        </td>

                        <td>
                            <div class="row">

                                <div class="col-md-12">

                                    <h3>{{ $article->title }}</h3>

                                    <p>
                                        {{ $article->article_content }}
                                    </p>

                                </div>

                            </div>

                        </td>

                        <td>
                            <div class="row">

                                <div class="col-md-12">

                                    <p>
                                        <a href="{{ route('bloggers.delete_article', $article->id) }}" class="btn btn-black">Supprimer cette article</a>
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
                        {{ $articles->links('layouts.pagination_tpl') }}
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Services area end here-->

@endsection
