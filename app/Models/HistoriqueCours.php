<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriqueCours extends Model
{
    protected $table = 'historique_cours';

    public $timestamps = false;

    protected $primaryKey = 'Id_historique_cours';

    protected $keyType = 'int';

    protected $fillable = [
        'cours',
        'date_enregistrement',
        'Id_cryptos',
    ];

    protected $dates = [
        'date_enregistrement',
    ];
}
