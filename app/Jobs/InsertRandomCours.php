<?php

namespace App\Jobs;

use App\Models\Crypto;
use App\Models\HistoriqueCours;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class InsertRandomCours implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $cryptos = Crypto::all();

        foreach ($cryptos as $crypto) {
            $randomCours = rand(1, 100) + rand(0, 99) / 100;
            HistoriqueCours::create([
                'cours' => $randomCours,
                'date_enregistrement' => Carbon::now(),
                'Id_cryptos' => $crypto->Id_cryptos,
            ]);
        }
    }
}
