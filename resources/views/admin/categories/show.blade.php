@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">{{ $category->name }}</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nom</label>
                                        <input id="name" type="text" class="form-control" value="{{ $category->name }}" name="name" placeholder="Nom">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website">Image</label>
                                        <input id="website" type="file" class="form-control" name="image" placeholder="Image">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" name="description" rows="5" class="form-control">{{ $category->description }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Mettre à jour</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
