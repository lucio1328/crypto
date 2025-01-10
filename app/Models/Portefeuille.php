<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portefeuille extends Model
{
    // Nom de la table associée
    public $timestamps = false;
    protected $table = 'portefeuilles';

    // Clé primaire
    protected $primaryKey = 'id_portefeuilles';

    // Les colonnes modifiables en masse (mass assignable)
    protected $fillable = [
        'solde',
        'date_creation',
        'id_utilisateur',
        'id_cryptos',
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
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur');
    }

    /**
     * Relation avec le modèle Crypto.
     * Un portefeuille est associé à une crypto.
     */
    public function crypto()
    {
        return $this->belongsTo(Crypto::class, 'id_cryptos');
    }

}
