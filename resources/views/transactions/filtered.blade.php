@extends('layouts.app')

@section('content')
    <h1>Transactions Filtrées</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Utilisateur</th>
                <th>Total Achat</th>
                <th>Total Vente</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->utilisateur }}</td>
                    <td>{{ $transaction->total_achat }}</td>
                    <td>{{ $transaction->total_vente }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('transactions.filter') }}" class="btn btn-secondary">Retour au filtre</a>
@endsection
