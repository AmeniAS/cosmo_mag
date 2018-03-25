@extends('layouts.admin')

@section('content')

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Téléphone</th>
            <th>Date de naissance</th>
            <th>Points</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bloggers as $blogger)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $blogger->name }}</td>
                <td>{{ $blogger->email }}</td>
                <td>{{ $blogger->phone }}</td>
                <td>{{ $blogger->birthdate }}</td>
                <td>{{ $blogger->points }}</td>
                <td>
                    <div>
                        <span><a href="{{ route('admin.bloggers.show', $blogger->id) }}"><i class="fa fa-eye icon_blue"></i></a></span>
                        {{--<span><a class="#"><i class="fa fa-edit icon_yellow"></i></a></span>--}}
                        <span>
                            <a href="{{ route('admin.bloggers.delete', $blogger->id) }}"><i class="fa fa-close icon_red"></i></a></span>
                    </div>
                    {{--<ul class="nav navbar-right panel_toolbox">
                        <li> <h class="#"><i class="glyphicon glyphicon-eye-open"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        </li><li><!--<a class="close-link">--><a class="#"><i class="fa fa-close"></i></a>
                        </li>

                    </ul>--}}
                </td>
            </tr>

        @endforeach

        </tbody>
        <tfoot>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Téléphone</th>
            <th>Date de naissance</th>
            <th>Points</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>

@endsection
