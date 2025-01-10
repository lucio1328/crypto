<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Formulaire d'inscription</h4>
                    </div>
                    <div class="card-body">
                        <!-- Messages de succès ou d'erreur -->
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

                        <!-- Formulaire -->
                        <form action="{{ route('inscription') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" required>
                                @error('nom')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="mot_de_passe" class="form-label">Mot de passe</label>
                                <input type="password" name="mot_de_passe" id="mot_de_passe" class="form-control @error('mot_de_passe') is-invalid @enderror" required>
                                @error('mot_de_passe')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirmMotDePasse" class="form-label">Confirmez le mot de passe</label>
                                <input type="password" name="confirmMotDePasse" id="confirmMotDePasse" class="form-control @error('confirmMotDePasse') is-invalid @enderror" required>
                                @error('confirmMotDePasse')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p class="mb-0">
                            Vous avez déjà un compte ?
                            <a href="{{ route('login') }}" class="text-primary">Connectez-vous ici</a>.
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <p class="mb-0">
                            Voir demo cours
                            <a href="{{ route('chart') }}" class="text-secondary">Cliquez ici</a>.
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <p class="mb-0">
                            Analyse
                            <a href="{{ route('analyse') }}" class="text-secondary">Analyse</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
