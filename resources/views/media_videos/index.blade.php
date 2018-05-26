@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des vid</div>

                    <div class="panel-body">

                        @foreach($videos as $video)

                            <div class="row">

                                <div class="col-md-12">

                                    <h1>{{ $video->title }}</h1>

                                    <video width="320" height="240" controls>
                                        <source src="{{ asset($video->url) }}" type="video/mp4">

                                        Your browser does not support the video tag.
                                    </video>

                                    <a href="#">{{ $video->blogger->name }}</a>

                                </div>

                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection