@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-md-12">

            <a href="{{ route('partners_admin.brands.create') }}" class="btn btn-primary col-md-2 col-md-offset-10">

                Créer une marque

            </a>

        </div>

    </div>

    <hr>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($brands as $brand)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $brand->name }}</td>
                <td>
                    <div>
                        <span>
                            <a href="{{ route('partners_admin.brands.show', $brand->id) }}"><i class="fa fa-eye icon_blue"></i></a>
                        </span>

                        <span>
                            <a href="{{ route('partners_admin.brands.delete', $brand->id) }}"><i class="fa fa-close icon_red"></i></a>
                        </span>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>
        <tfoot>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>

@endsection
