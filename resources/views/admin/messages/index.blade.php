@extends('layouts.admin')

@section('content')

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Nom et prénom</th>
            <th>E-mail</th>
            <th>Message</th>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->message }}</td>
            </tr>

        @endforeach

        </tbody>
        <tfoot>
        <tr>
            <th>#</th>
            <th>Nom et prénom</th>
            <th>E-mail</th>
            <th>Message</th>
        </tr>
        </tfoot>
    </table>

@endsection
