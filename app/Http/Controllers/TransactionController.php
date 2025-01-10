<?php

namespace App\Http\Controllers;

use App\Models\Crypto;
use App\Models\TypeTransaction;
use App\Models\Transaction;
use App\Models\Utilisateur;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Ajout pour DB

class TransactionController extends Controller
{
    public function create()
    {
        // Récupérer toutes les cryptos et types de transactions pour remplir les listes déroulantes
        $cryptos = Crypto::all();
        $typeTransactions = TypeTransaction::all();
        // $utilisateurs = Utilisateur ::all();

        // Retourner la vue avec les données nécessaires pour les listes déroulantes
        return view('transactions.create', compact('cryptos', 'typeTransactions'));
    }

    public function store(Request $request)
{
    // Validation des données
    $request->validate([
        'quantite' => 'required|integer',
        'prix' => 'required|numeric',
        'date_transaction' => 'required|date',
        'utilisateur' => 'required|string|max:255', // validation ajoutée
        'id_cryptos' => 'required|exists:cryptos,id_cryptos',
        'id_type_transaction' => 'required|exists:type_transaction,id_type_transaction'
    ]);

    try {
        // Création de la transaction
        $transaction = new Transaction();
        $transaction->quantite = $request->quantite;
        $transaction->prix = $request->prix;
        $transaction->date_transaction = $request->date_transaction;
        $transaction->id_utilisateur = $request->utilisateur;
        $transaction->id_cryptos = $request->id_cryptos;
        $transaction->id_type_transaction = $request->id_type_transaction;
        $transaction->save();

        // Rediriger avec un message de succès
        return redirect()->route('transactions.index')->with('success', 'Transaction ajoutée avec succès');
    } catch (\Exception $e) {
        // En cas d'erreur, renvoyer l'erreur à la vue
        return redirect()->route('transactions.create')->with('error', 'Erreur lors de l\'insertion : ' . $e->getMessage());
    }
}
public function index()
{
    // Récupérer toutes les transactions de la base de données
    $transactions = Transaction::all();

    // Passer les transactions à la vue
    return view('transactions.index', compact('transactions'));
}
public function showFilter(Request $request)
{
    // Récupérer la date maximale à partir de la requête
    $dateMax = $request->input('date_max');

    // Valider le format de la date (AAAA-MM-JJ) et vérifier qu'elle n'est pas nulle
    if (empty($dateMax) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $dateMax)) {
        return back()->withErrors(['date_max' => 'Veuillez fournir une date valide au format AAAA-MM-JJ.']);
    }

    // Construire la requête
    $transactions = DB::table('transactions')
        ->select(
            'utilisateur',
            DB::raw('SUM(CASE WHEN type_transaction = "achat" THEN prix ELSE 0 END) AS total_achat'),
            DB::raw('SUM(CASE WHEN type_transaction = "vente" THEN prix ELSE 0 END) AS total_vente')
        )
        ->whereDate('date_transaction', '<=', $dateMax) // Utilisation sûre après validation
        ->groupBy('utilisateur')
        ->get();

    // Retourner la vue avec les transactions filtrées
    return view('transactions.filtered', compact('transactions'));
}


public function filterTransactions(Request $request)
{
    // Récupérer la date maximale à partir du formulaire
    $dateMax = $request->input('date_max');

    // Valider le format de la date
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dateMax)) {
        return back()->withErrors(['date_max' => 'La date doit être au format AAAA-MM-JJ.']);
    }

    // Récupérer les transactions correspondant au filtre
    $transactions = DB::table('transactions')
        ->select(
            'utilisateur',
            DB::raw('SUM(CASE WHEN type_transaction = "achat" THEN prix ELSE 0 END) AS total_achat'),
            DB::raw('SUM(CASE WHEN type_transaction = "vente" THEN prix ELSE 0 END) AS total_vente')
        )
        ->whereDate('date_transaction', '<=', $dateMax)
        ->groupBy('utilisateur')
        ->get();

    // Retourner la vue avec les transactions filtrées
    return view('transactions.filtered', compact('transactions'));
}




}
