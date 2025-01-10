<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
    use HasFactory;

    protected $table = 'cryptos'; // Assurez-vous que le nom de la table est correct
    protected $primaryKey = 'id_cryptos';
    public $timestamps = false; // Si vous n'utilisez pas les timestamps (created_at et updated_at)
}
