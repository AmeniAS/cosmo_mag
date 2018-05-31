@extends('layouts.admin')

@section('content')

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>User</th>
            <th>Commande</th>
        </tr>
        </thead>
        <tbody>

        @foreach($commandes as $commande)

            <tr>
                <td>{{ $commande->user->name }}</td>
                <td>

                    <ul>

                        @foreach($commande->products as $product)
                            <li>
                                <strong>{{ $product->name }}</strong>
                                <ul>
                                    <li><strong>Prix: </strong>{{ $product->price }} Dt</li>
                                    <li><strong>Quantité: </strong>{{ $product->pivot->quantity }}</li>
                                </ul>{{--({{ $product->price }} Dt): {{ $product->pivot->quantity }}--}}
                            </li>
                        @endforeach
                    </ul>

                </td>
            </tr>

        @endforeach

        </tbody>
        <tfoot>
        <tr>
            <th>User</th>
            <th>Commande</th>
        </tr>
        </tfoot>
    </table>

@endsection
