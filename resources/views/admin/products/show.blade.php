@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">{{ $product->name }}</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="{{ route('admin.products.update', $product->id) }}">

                            {{ csrf_field() }}

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nom du produit</label>
                                        <input id="name" type="text" name="name" class="form-control" placeholder="Nom du produit" value="{{ $product->name }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label for="brand_id">Marque</label>

                                        <select id="brand_id" name="brand_id" class="form-control">
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="price">Prix</label>
                                        <input id="price" type="number" name="price" class="form-control" placeholder="Prix" value="{{ $product->price }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="quantity">Quantité</label>
                                        <input id="quantity" type="number" name="quantity" class="form-control" placeholder="Quantité" value="{{ $product->quantity }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="image_file">Image</label>
                                        <input id="image_file" type="file" name="image_file" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" rows="5" class="form-control" name="description">{{ $product->description }}</textarea>
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
