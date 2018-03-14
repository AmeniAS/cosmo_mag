@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $article->title }}</div>

                    <div class="panel-body">

                        <img src="{{ $article->image }}" class="img-responsive">

                        <p>
                            {{ $article->article_content }}
                        </p>

                        <span>Nombre de visite : {{ $article->views_count }}</span>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
