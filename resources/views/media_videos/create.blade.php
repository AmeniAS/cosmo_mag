{{--{{ dd($errors) }}--}}
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

                    <h2>Ajouter une Video</h2>

                    <form class="form-horizontal" method="POST" action="{{ route('media_videos.store') }}"
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

                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-4 control-label">Video</label>

                            <div class="col-md-6">
                                <input id="url" type="file" name="url" required>

                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
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
