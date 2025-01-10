<?php

namespace App\Services;

use App\Models\Crypto;

class CryptoService
{
    /**
     * Obtenir tous les portefeuilles
     */
    public function getAll()
    {
        return Crypto::all();
    }

    public function create(array $data)
    {
        return Crypto::create($data);
    }

    public function getById(int $id)
    {
        return Crypto::findOrFail($id);
    }

}
