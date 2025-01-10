<?php

namespace App\Http\Controllers;

use App\Services\CryptoService;
use Illuminate\Http\Request;
use App\Models\Portefeuille;
use App\Services\PortefeuilleService;

class PortefeuilleController extends Controller
{
    protected $portefeuilleService;
    protected $cryptoService;

    // Injectez PortefeuilleService via le constructeur
    public function __construct(PortefeuilleService $ps, CryptoService $cs)
    {
        $this->portefeuilleService = $ps;
        $this->cryptoService = $cs;
    }
    public function form()
    {
        // liste de crypto
        $listeCrypto = $this->cryptoService->getAll();
        return view('insertionPortefeuille')->with('listeCrypto', $listeCrypto); // Charge la vue d'insertion
    }
    public function list()
    {
        // liste de crypto
        // $listeCrypto = $this->cryptoService->getAll();
        return view('listePortefeuille'); // Charge la vue d'insertion
    }

    public function create(Request $request)
    {

        // // Récupération des données validées
        $data = [
            'solde' => $request->input('solde'),
            'date_creation' => $request->input('date_creation'),
            'id_cryptos' => $request->input('Id_cryptos'),
            'id_utilisateur' => 1, // Assurez-vous de récupérer l'ID de l'utilisateur connecté, ici c'est un exemple
        ];

        // // Appeler le service pour créer un portefeuille
        $portefeuille = $this->portefeuilleService->create($data);

        // // Retourner une réponse (par exemple, rediriger vers une page avec un message de succès)
        // return redirect()->route('portfeuille.index')->with('success', 'Portefeuille créé avec succès!');
        return view('layout');
    }

}
