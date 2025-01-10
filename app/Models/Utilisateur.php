<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'utilisateur';

    protected $fillable = [
        'nom',
        'email',
        'mot_de_passe',
    ];

    public $timestamps = false;

    protected $primaryKey = 'Id_utilisateur';

    protected $keyType = 'int';

    public $incrementing = true;
}
