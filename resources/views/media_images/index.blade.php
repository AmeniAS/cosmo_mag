@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des images</div>

                    <div class="panel-body">

                        @foreach($images as $image)

                            <div class="row">

                                <div class="col-md-12">

                                    <h1>{{ $image->title }}</h1>
                                    <img src="{{ asset('storage/' . $image->path) }}" class="img-responsive">
                                    <p>{{ $image->description }}</p>
                                    <a href="#">{{ $image->blogger->name }}</a>

                                </div>

                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection