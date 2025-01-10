@extends('layout') <!-- Étend le layout principal -->

@section('content')
    <form action="/portefeuille/create" method="POST"
        style="max-width: 600px; margin: 20px auto; background-color: #f5f5f5; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        @csrf
        <h2 style="text-align: center; color: #007bff;">Créer un Portefeuille</h2>

        <!-- Champ pour le solde -->
        <div style="margin-bottom: 15px;">
            <label for="solde" style="display: block; font-weight: bold; margin-bottom: 5px;">Solde</label>
            <input type="number" step="0.00001" name="solde" id="solde" required placeholder="Entrez le solde"
                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        </div>

        <!-- Champ pour la date de création -->
        <div style="margin-bottom: 15px;">
            <label for="date_creation" style="display: block; font-weight: bold; margin-bottom: 5px;">Date de
                création</label>
            <input type="date" name="date_creation" id="date_creation" required
                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        </div>

        <!-- Champ pour la cryptomonnaie -->
        <div style="margin-bottom: 15px;">
            <label for="Id_cryptos" style="display: block; font-weight: bold; margin-bottom: 5px;">Cryptomonnaie</label>
            <select name="Id_cryptos" id="Id_cryptos" required
                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                <option selected disabled>-- Sélectionnez une cryptomonnaie --</option>
                <!-- Liste des cryptomonnaies -->
                @foreach ($listeCrypto as $crypto)
                    <option value="{{ $crypto->id_cryptos }}">{{ $crypto->nom_crypto }} ({{ $crypto->symbole }})</option>
                @endforeach
            </select>
        </div>

        <!-- Bouton de soumission -->
        <div style="text-align: center;">
            <button type="submit"
                style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                Créer le portefeuille
            </button>
        </div>
    </form>
@endsection
