<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
    // Nom de la table associée
    protected $table = 'cryptos';

    // Clé primaire
    protected $primaryKey = 'id_cryptos';

    // Les colonnes modifiables en masse (mass assignable)
    protected $fillable = [
        'nom_crypto',
        'symbole',
        'cours',
        'date_mise_jour',
        'pourcentage',
    ];

    // Indique que la clé primaire n'est pas un incrément auto si vous utilisez SERIAL
    public $incrementing = true;

    // Définir les relations avec d'autres modèles

    /**
     * Relation avec le modèle Portefeuille.
     * Une crypto peut être liée à plusieurs portefeuilles.
     */
    public function portefeuilles()
    {
        return $this->hasMany(Portefeuille::class, 'Id_cryptos');
    }

    /**
     * Relation avec le modèle HistoriqueCours.
     * Une crypto peut avoir plusieurs historiques de cours.
     */
    public function historiqueCours()
    {
        return $this->hasMany(HistoriqueCours::class, 'Id_cryptos');
    }
}
