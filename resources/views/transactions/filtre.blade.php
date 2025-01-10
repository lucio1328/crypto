<!-- resources/views/transactions/filtre.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Filtrer les Transactions</h1>
        @if ($errors->has('date_max'))
            <div class="alert alert-danger">
                {{ $errors->first('date_max') }}
            </div>
        @endif
        <form action="{{ route('transactions.filter') }}" method="GET">
            @csrf
            <label for="date_max">Date Maximum :</label>
            <input type="date" name="date_max" id="date_max" required>
            <button type="submit">Filtrer</button>
        </form>


            <button type="submit" class="btn btn-primary mt-4">Appliquer le filtre</button>
        </form>

        @if(isset($transactions))
            <h2 class="mt-5">Résultats des Transactions</h2>

            <!-- Tableau des transactions filtrées -->
            <table class="table table-bordered table-striped mt-3">
                <thead class="table-dark">
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
        @endif
    </div>
@endsection
