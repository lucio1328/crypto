@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Affichage des messages d'erreur ou de succès -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif


        <!-- Formulaire de création de transaction -->
        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="quantite">Quantité</label>
                <input type="number" class="form-control @error('quantite') is-invalid @enderror" id="quantite" name="quantite" value="{{ old('quantite') }}" required>
                @error('quantite')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" step="0.01" class="form-control @error('prix') is-invalid @enderror" id="prix" name="prix" value="{{ old('prix') }}" required>
                @error('prix')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="date_transaction">Date de la transaction</label>
                <input type="date" class="form-control @error('date_transaction') is-invalid @enderror" id="date_transaction" name="date_transaction" value="{{ old('date_transaction') }}" required>
                @error('date_transaction')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          
           
            <div class="form-group">
                <label for="utilisateur">Utilisateur</label>
                <input type="text" step="0.01" class="form-control @error('utilisateur') is-invalid @enderror" id="utilisateur" name="utilisateur" value="{{ old('utilisateur') }}" required>
                @error('utilisateur')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="id_cryptos">Cryptomonnaie</label>
                <select class="form-control @error('id_cryptos') is-invalid @enderror" id="id_cryptos" name="id_cryptos" required>
                    <option value="">Sélectionnez une cryptomonnaie</option>
                    @foreach($cryptos as $crypto)
                        <option value="{{ $crypto->id_cryptos }}" {{ old('id_cryptos') == $crypto->id_cryptos ? 'selected' : '' }}>
                            {{ $crypto->nom_crypto }}
                        </option>
                    @endforeach
                </select>
                @error('id_cryptos')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="id_type_transaction">Type de transaction</label>
                <select class="form-control @error('id_type_transaction') is-invalid @enderror" id="id_type_transaction" name="id_type_transaction" required>
                    <option value="">Sélectionnez un type de transaction</option>
                    @foreach($typeTransactions as $typeTransaction)
                        <option value="{{ $typeTransaction->id_type_transaction }}" {{ old('id_type_transaction') == $typeTransaction->id_type_transaction ? 'selected' : '' }}>
                            {{ $typeTransaction->type }}
                        </option>
                    @endforeach
                </select>
                @error('id_type_transaction')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Ajouter la transaction</button>
        </form>
    </div>

    <!-- CSS personnalisé pour le formulaire -->
    <style>
        .container {
            max-width: 800px;
            margin-top: 50px;
        }

        .alert {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
            font-size: 16px;
        }

        .btn {
            background-color: #007bff;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .invalid-feedback {
            display: block;
            font-size: 14px;
            color: #dc3545;
        }

        .form-group label {
            font-weight: bold;
            font-size: 16px;
        }
    </style>
@endsection
