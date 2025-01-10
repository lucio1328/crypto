<?php

namespace App\Services;

use App\Models\Portefeuille;

class PortefeuilleService
{
    /**
     * Obtenir tous les portefeuilles
     */
    public function getAllPortefeuilles()
    {
        return Portefeuille::all();
    }

    public function createPortefeuille(Portefeuille $portefeuille)
    {
        $portefeuille->save();
        return $portefeuille;
    }

    public function getById(int $id)
    {
        return Portefeuille::findOrFail($id);
    }

}
