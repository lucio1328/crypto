@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Résultats de l'Analyse</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Crypto</th>
                <th>Analyse</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($analysisResults as $cryptoName => $result)
                <tr>
                    <td>{{ $cryptoName }}</td>
                    <td>{{ request()->input('analyse_type') }}</td>
                    <td>{{ $result }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        <h5>Plage de dates : {{ $date_min }} à {{ $date_max }}</h5>
    </div>
</div>
@endsection
