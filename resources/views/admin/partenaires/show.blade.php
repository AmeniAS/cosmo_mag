@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">{{ $partenaire->name }}</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="{{ route('admin.partenaires.update', $partenaire->id) }}">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <input type="text" class="form-control" disabled placeholder="Type" value="Partenaire">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="name" class="form-control" placeholder="Username" value="{{ $partenaire->name }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ $partenaire->email }}">
                                    </div>
                                </div>
                            </div>





                            {{--<div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                    </div>
                                </div>
                            </div>--}}

                            <button type="submit" class="btn btn-info btn-fill pull-right">Mettre à jour</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
