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

                @foreach($videos as $video)

                    <tr>

                        <td>
                            <div class="row">

                                <div class="col-md-12">

                                    <h3>{{ $video->title }}</h3>

                                </div>

                            </div>

                        </td>

                        <td>

                            <div class="col-sm-12 col-xs-12 accurate" style="max-width: 350px">

                                <div class="col-md-4">
                                    {{--<h3>{{ $video->title }}</h3>--}}
                                    <video width="320" height="240" controls>
                                        <source src="{{ asset($video->url) }}" type="video/mp4">

                                        Your browser does not support the video tag.
                                    </video>
                                </div>

                            </div>

                        </td>

                        <td>
                            <div class="row">

                                <div class="col-md-12">

                                    <p>
                                        <a href="{{ route('bloggers.delete_video', $video->id) }}" class="btn btn-black">Supprimer cette video</a>
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
                        {{ $videos->links('layouts.pagination_tpl') }}
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Services area end here-->

@endsection
