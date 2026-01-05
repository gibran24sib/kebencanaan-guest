<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DistribusiLogistik;

class DistribusiLogistikSeeder extends Seeder
{
    public function run(): void
    {
        DistribusiLogistik::create([
            'logistik_id' => 1,
            'posko_id' => 1,
            'tanggal' => now(),
            'jumlah' => 50,
            'penerima' => 'Warga Posko A',
            'bukti_distribusi' => null
        ]);
    }
}
