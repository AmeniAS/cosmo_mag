@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des articles</div>

                    <div class="panel-body">

                        @foreach($articles as $article)

                        <div class="row">
                            
                            <div class="col-md-12">
                                
                                <h1>{{ $article->title }}</h1>
                                <img src="{{ $article->image }}" width="150px" class="img-responsive">
                                <p>{{ $article->article_content }}</p>
                                <a href="#">{{ $article->blogger->name }}</a>
                                <span>Compteur de vues : {{ $article->views_count }}</span>

                                {{--<button class="btn btn-primary">Modifier</button>--}}

                                @can('update', $article)
                                    <button class="btn btn-primary">Modifier</button>
                                @endcan

                            </div>
                            
                        </div>

                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection