@extends('layouts.front_main')

@section('custom_css')

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/custom_forms.css') }}">

@endsection

@section('content')

    <section class="single-blog-area section">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-2 form-style-8">

                    <h2>Ajouter un Article</h2>

                    <form class="form-horizontal" method="POST" action="{{ route('articles.store') }}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Titre</label>

                            <div class="col-md-6">
                                <input id="title" type="text" name="title" value="{{ old('title') }}" required
                                       autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" name="image" required>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('article_content') ? ' has-error' : '' }}">
                            <label for="article_content" class="col-md-4 control-label">Contenu</label>

                            <div class="col-md-6">

                                <textarea name="article_content" id="article_content" cols="30" rows="10">{{ old('article_content') }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('article_content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" value="Créer"/>
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </section>

@endsection
