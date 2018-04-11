@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-md-12">

            <a href="{{ route('admin.stores.create') }}" class="btn btn-primary col-md-2 col-md-offset-10">

                Créer une boutique

            </a>

        </div>

    </div>

    <hr>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Website</th>
            <th>City</th>
            <th>State</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($stores as $store)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $store->name }}</td>
                <td>{{ $store->address }}</td>
                <td>{{ $store->website }}</td>
                <td>{{ $store->city }}</td>
                <td>{{ $store->state }}</td>
                <td>
                    <div>
                        <span>
                            <a href="{{ route('admin.stores.show', $store->id) }}"><i class="fa fa-eye icon_blue"></i></a>
                        </span>

                        <span>
                            <a href="{{ route('admin.stores.delete', $store->id) }}"><i class="fa fa-close icon_red"></i></a>
                        </span>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>
        <tfoot>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Website</th>
            <th>City</th>
            <th>State</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>

@endsection
