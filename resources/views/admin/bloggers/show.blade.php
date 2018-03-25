@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">{{ $blogger->name }}</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="{{ route('admin.bloggers.update', $blogger->id) }}">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <input type="text" class="form-control" disabled placeholder="Type" value="Blogger">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="name" class="form-control" placeholder="Username" value="{{ $blogger->name }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ $blogger->email }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input type="text" name="address" class="form-control" placeholder="Adresse" value="{{ $blogger->address }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Points</label>
                                        <input type="text" class="form-control" disabled placeholder="Points" value="{{ $blogger->points }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $blogger->phone }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook" class="form-control" placeholder="Points" value="{{ $blogger->facebook }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" class="form-control" placeholder="Phone" value="{{ $blogger->instagram }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="youtube" class="form-control" placeholder="Phone" value="{{ $blogger->youtube }}">
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
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="{{ $blogger->image }}" alt="..."/>

                                <h4 class="title">{{ $blogger->name }}<br />
                                    <small>{{ $blogger->email }}</small>
                                </h4>
                            </a>
                        </div>
                        <p class="description text-center"> "Lamborghini Mercy <br>
                            Your chick she so thirsty <br>
                            I'm in that two seat Lambo"
                        </p>
                    </div>
                    <hr>
                    <div class="text-center">
                        <a href="{{ $blogger->facebook }}" target="_blank" class="btn btn-simple"><i class="fa fa-facebook-square"></i></a>
                        <a href="{{ $blogger->instagram }}" target="_blank" class="btn btn-simple"><i class="fa fa-instagram"></i></a>
                        <a href="{{ $blogger->youtube }}" target="_blank" class="btn btn-simple"><i class="fa fa-youtube-square"></i></a>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
