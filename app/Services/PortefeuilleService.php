<?php

namespace App\Services;

use App\Models\Portefeuille;

class PortefeuilleService
{
    /**
     * Obtenir tous les portefeuilles
     */
    public function getAll()
    {
        return Portefeuille::all();
    }

    public function create(array $data)
    {
        return Portefeuille::create($data);
    }

    public function getById(int $id)
    {
        return Portefeuille::findOrFail($id);
    }

}
