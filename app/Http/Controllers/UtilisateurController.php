<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function inscription(Request $request)
    {
        // Valider les données du formulaire
        $validated = $request->validate([
            'nom' => 'required|string|max:50',
            'email' => 'required|email|unique:users|max:50',
            'mot_de_passe' => 'required|string|min:6|confirmed',
        ]);

        // Appeler l'API de pré-inscription
        try {
            $response = Http::post('http://localhost:8080/utilisateurs/pre-inscription', [
                'nom' => $validated['nom'],
                'email' => $validated['email'],
                'motDePasse' => $validated['mot_de_passe'],
                'confirmMotDePasse' => $request->confirmMotDePasse,
            ]);

            // Gérer la réponse de l'API
            if ($response->status() == 202) {
                return redirect()->back()->with('success', 'Pré-inscription réussie ! Vérifiez votre email.');
            }
            else {
                return redirect()->back()->with('error', $response->json('error') ?? 'Erreur inconnue');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Impossible de contacter l\'API : ' . $e->getMessage());
        }
    }
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
