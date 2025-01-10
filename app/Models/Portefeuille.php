<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portefeuille extends Model
{
    // Nom de la table associée
    protected $table = 'portefeuilles';

    // Clé primaire
    protected $primaryKey = 'Id_portefeuilles';

    // Les colonnes modifiables en masse (mass assignable)
    protected $fillable = [
        'solde',
        'date_creation',
        'Id_utilisateur',
        'Id_cryptos',
    ];

    // Indique que la clé primaire n'est pas un incrément auto si vous utilisez SERIAL
    public $incrementing = true;

    // Définir les relations avec d'autres modèles

    /**
     * Relation avec le modèle Utilisateur.
     * Un portefeuille appartient à un utilisateur.
     */
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'Id_utilisateur');
    }

    /**
     * Relation avec le modèle Crypto.
     * Un portefeuille est associé à une crypto.
     */
    public function crypto()
    {
        return $this->belongsTo(Crypto::class, 'Id_cryptos');
    }
}
