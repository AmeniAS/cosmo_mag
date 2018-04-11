@extends('layouts.admin')

@section('content')

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <div>
                        <span>
                            <a href="{{ route('admin.categories.show', $category->id) }}"><i class="fa fa-eye icon_blue"></i></a>
                        </span>

                        <span>
                            <a href="{{ route('admin.categories.delete', $category->id) }}"><i class="fa fa-close icon_red"></i></a>
                        </span>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>
        <tfoot>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>

@endsection
