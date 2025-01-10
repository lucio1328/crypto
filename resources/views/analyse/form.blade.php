@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Analyse des Cours des Cryptos</h1>
    <form method="POST" action="{{ route('analyse.generate') }}">
        @csrf
        <div class="mb-3">
            <label for="analyse_type" class="form-label">Type d'Analyse</label>
            <select name="analyse_type" class="form-select" required>
                <option value="1er quartile">1er Quartile</option>
                <option value="max">Max</option>
                <option value="min">Min</option>
                <option value="moyenne">Moyenne</option>
                <option value="ecart-type">Ecart-Type</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Crypto</label><br>
            <label><input type="checkbox" name="crypto[]" value="0"> Tous</label><br>
            @foreach ($cryptos as $crypto)
                <label><input type="checkbox" name="crypto[]" value="{{ $crypto->Id_cryptos }}"> {{ $crypto->nom_crypto }}</label><br>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="date_min" class="form-label">Date Min</label>
            <input type="datetime-local" name="date_min" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="date_max" class="form-label">Date Max</label>
            <input type="datetime-local" name="date_max" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>
@endsection
