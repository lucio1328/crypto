@extends('layout') <!-- Étend le layout principal -->

@section('content')
    <div class="portefeuilles-container">
        <h1 class="page-title">Mes portefeuilles</h1>

        <div class="portefeuilles-list">
            <!-- Portefeuille 1 -->
            <div class="portefeuille-card">
                <div class="portefeuille-header">
                    <h3>Bitcoin (BTC)</h3>
                </div>
                <div class="portefeuille-body">
                    <p><strong>ID:</strong> 1</p>
                    <p><strong>Solde:</strong> 0.24500 BTC</p>
                    <p><strong>Date de création:</strong> 2025-01-10</p>
                </div>
                <div class="portefeuille-footer">
                    <a href="#" class="btn btn-edit">Éditer</a>
                    <a href="#" class="btn btn-delete">Supprimer</a>
                </div>
            </div>

            <!-- Portefeuille 2 -->
            <div class="portefeuille-card">
                <div class="portefeuille-header">
                    <h3>Ethereum (ETH)</h3>
                </div>
                <div class="portefeuille-body">
                    <p><strong>ID:</strong> 2</p>
                    <p><strong>Solde:</strong> 12.60000 ETH</p>
                    <p><strong>Date de création:</strong> 2024-12-25</p>
                </div>
                <div class="portefeuille-footer">
                    <a href="#" class="btn btn-edit">Éditer</a>
                    <a href="#" class="btn btn-delete">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Mise en place de la couleur de base et d'un joli fond */
        :root {
            --primary-color: #007bff;
            --hover-color: #0056b3;
            --button-bg-edit: #28a745;
            --button-bg-edit-hover: #218838;
            --button-bg-delete: #dc3545;
            --button-bg-delete-hover: #c82333;
            --card-bg-color: #ffffff;
            --card-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            --border-radius: 12px;
            --transition-time: 0.3s;
        }

        /* Conteneur des portefeuilles */
        .portefeuilles-container {
            padding: 30px;
            background: #f7f7f7;
            min-height: 100vh;
        }

        .page-title {
            text-align: center;
            color: var(--primary-color);
            font-family: 'Arial', sans-serif;
            font-size: 2rem;
            margin-bottom: 30px;
        }

        /* Mise en grille pour les cartes */
        .portefeuilles-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        /* Carte de portefeuille */
        .portefeuille-card {
            background-color: var(--card-bg-color);
            box-shadow: var(--card-shadow);
            border-radius: var(--border-radius);
            padding: 20px;
            overflow: hidden;
            transition: transform var(--transition-time), box-shadow var(--transition-time);
        }

        /* Effet de survol */
        .portefeuille-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Header de la carte */
        .portefeuille-header {
            text-align: center;
            margin-bottom: 15px;
        }

        .portefeuille-header h3 {
            font-size: 1.5rem;
            color: #333;
            font-weight: 600;
        }

        /* Contenu de la carte */
        .portefeuille-body {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
        }

        .portefeuille-footer {
            text-align: center;
        }

        /* Boutons d'action */
        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            transition: background-color var(--transition-time);
            margin: 5px;
            display: inline-block;
            text-align: center;
        }

        .btn-edit {
            background-color: var(--button-bg-edit);
        }

        .btn-edit:hover {
            background-color: var(--button-bg-edit-hover);
        }

        .btn-delete {
            background-color: var(--button-bg-delete);
        }

        .btn-delete:hover {
            background-color: var(--button-bg-delete-hover);
        }
    </style>
@endsection
