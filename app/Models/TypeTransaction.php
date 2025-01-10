<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTransaction extends Model
{
    use HasFactory;

    protected $table = 'type_transaction'; // Assurez-vous que le nom de la table est correct
    protected $primaryKey = 'id_type_transaction';
    public $timestamps = false; // Si vous n'utilisez pas les timestamps
}

