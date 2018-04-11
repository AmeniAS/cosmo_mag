@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="content">
                        <form method="post" action="{{ route('admin.stores.store') }}" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nom de la boutique</label>
                                        <input id="name" type="text" class="form-control" name="name" placeholder="Nom de la boutique">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website">Site web</label>
                                        <input id="website" type="text" class="form-control" name="website" placeholder="Site web">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Adresse</label>
                                        <input id="address" type="text" class="form-control" name="address" placeholder="Adresse">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="state">Gouvernorat</label>
                                        <input id="state" type="text" class="form-control" name="state" placeholder="Gouvernorat">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="city">Cité</label>
                                        <input id="city" type="text" class="form-control" name="city" placeholder="Cité">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="zip_code">Code postal</label>
                                        <input id="zip_code" type="text" class="form-control" name="zip_code" placeholder="Code postal">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="longitude">Longitude</label>
                                        <input id="longitude" type="text" class="form-control" name="longitude" placeholder="Longitude">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="latitude">Lattitude</label>
                                        <input id="latitude" type="text" class="form-control" name="latitude" placeholder="Lattitude">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" name="description" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Créer</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
