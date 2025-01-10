<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Spécifiez le nom de la table si elle n'est pas au pluriel par défaut
    protected $table = 'transactions';
    public $timestamps = false;

    // Indiquez les champs qui peuvent être assignés en masse
    protected $fillable = [
        'quantite',
        'prix',
        'date_transaction',
        'id_utilisateur',
        'id_cryptos',
        'id_type_transaction',
    ];

    // Si vous avez des relations avec d'autres tables, vous pouvez les définir ici
    public function crypto()
    {
        return $this->belongsTo(Crypto::class, 'id_cryptos');
    }
    protected $primaryKey = 'id_transactions';

    public function typeTransaction()
    {
        return $this->belongsTo(TypeTransaction::class, 'id_type_transaction');
    }
}
