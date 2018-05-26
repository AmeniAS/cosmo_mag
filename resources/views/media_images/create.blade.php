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

                    <h2>Ajouter une image</h2>

                    <form class="form-horizontal" method="POST" action="{{ route('media_images.store') }}"
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

                        <div class="form-group{{ $errors->has('image_file') ? ' has-error' : '' }}">
                            <label for="image_file" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="image_file" type="file" name="image_file" required>

                                @if ($errors->has('image_file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image_file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">

                                <textarea name="description" id="description" cols="30" rows="10"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
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
