@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Laisser un avis</div>

                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('feedbacks.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                <label for="comment" class="col-md-4 control-label">Commentaire</label>

                                <div class="col-md-6">
                                    <input id="comment" type="text" class="form-control" name="comment" value="{{ old('comment') }}" required autofocus>

                                    @if ($errors->has('comment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Poster
                                    </button>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Avis des utilisateurs</div>

                    <div class="panel-body">

                        @foreach($feedbacks as $feedback)

                            <strong>{{ $feedback->feedbackable->name }}</strong>: {{ $feedback->comment }} <hr>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection