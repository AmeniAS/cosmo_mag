@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">{{ $brand->name }}</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="{{ route('partners_admin.brands.update', $brand->id) }}">

                            {{ csrf_field() }}

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nom de la marque</label>
                                        <input id="name" type="text" class="form-control" value="{{ $brand->name }}" name="name" placeholder="Nom de la marque">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website">Site web</label>
                                        <input id="website" type="text" class="form-control" value="{{ $brand->website }}" name="website" placeholder="Site web">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">Categorie</label>

                                        <select id="category_id" name="category_id" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $brand->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <input id="logo" type="file" class="form-control" name="logo">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" name="description" rows="5" class="form-control">{{ $brand->description }}</textarea>
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
