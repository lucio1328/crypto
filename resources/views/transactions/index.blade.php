<!-- resources/views/transactions/index.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <!-- Lien vers le CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ6Hk3uAqmfOdFbQfxq/9fA6RzHV7XpyJOhj/lckCjSK3wD54iE9RQm6iPeT" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Liste des Transactions</h1>

        <!-- Tableau avec des classes Bootstrap -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Transaction</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th>Utiliisateur</th>
                    <th>Date Transaction</th>
                    <th>Crypto</th>
                    <th>Type Transaction</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->Id_transactions }}</td>
                        <td>{{ $transaction->quantite }}</td>
                        <td>{{ $transaction->prix }}</td>
                        <td>{{ $transaction->utilisateur }}</td>
                        <td>{{ $transaction->date_transaction }}</td>
                        <td>{{ $transaction->crypto->nom_crypto }}</td>
                        <td>{{ $transaction->typeTransaction->type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Bouton d'ajout avec Bootstrap -->
        <a href="{{ route('transactions.create') }}" class="btn btn-primary mt-4">Ajouter une transaction</a>
    </div>

    <!-- Script Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqfD9Ok6siJlLgZcXZ8m1Vse9GxUfhI91BlQk4hb9eX7X" crossorigin="anonymous"></script>
</body>
</html>
