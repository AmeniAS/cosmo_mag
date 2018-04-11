@extends('layouts.admin')

@section('custom_css')

    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />

@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">{{ $store->name }}</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="{{ route('admin.stores.update', $store->id) }}">

                            {{ csrf_field() }}

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nom de la boutique</label>
                                        <input id="name" type="text" class="form-control" value="{{ $store->name }}" name="name" placeholder="Nom de la boutique">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website">Site web</label>
                                        <input id="website" type="text" class="form-control" value="{{ $store->website }}" name="website" placeholder="Site web">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Adresse</label>
                                        <input id="address" type="text" class="form-control" value="{{ $store->address }}" name="address" placeholder="Adresse">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="state">Gouvernorat</label>
                                        <input id="state" type="text" class="form-control" value="{{ $store->state }}" name="state" placeholder="Gouvernorat">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="city">Cité</label>
                                        <input id="city" type="text" class="form-control" value="{{ $store->city }}" name="city" placeholder="Cité">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="zip_code">Code postal</label>
                                        <input id="zip_code" type="text" class="form-control" value="{{ $store->zip_code }}" name="zip_code" placeholder="Code postal">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="longitude">Longitude</label>
                                        <input id="longitude" type="text" class="form-control" value="{{ $store->longitude }}" name="longitude" placeholder="Longitude">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="latitude">Lattitude</label>
                                        <input id="latitude" type="text" class="form-control" value="{{ $store->latitude }}" name="latitude" placeholder="Lattitude">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" name="description" rows="5" class="form-control">{{ $store->description }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label for="brands">Marques</label>
                                        <select id="brands" class="js-example-basic-multiple" name="brand_ids[]" multiple="multiple" style="width: 100%">

                                            @foreach($brands as $brand)

                                                <option value="{{ $brand->id }}" {{ ( in_array($brand->id, $store->brands->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $brand->name }}</option>

                                            @endforeach

                                        </select>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label for="products">Produits</label>
                                        <select id="products" class="js-example-basic-multiple" name="product_ids[]" multiple="multiple" style="width: 100%">

                                            @foreach($products as $product)

                                                <option value="{{ $product->id }}" {{ ( in_array($product->id, $store->products->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $product->name }}</option>

                                            @endforeach

                                        </select>

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

@section('custom_js')

    <script src="{{ asset('js/select2.min.js') }}"></script>

    <script>

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });

    </script>

@endsection
