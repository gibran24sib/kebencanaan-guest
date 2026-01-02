<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LogistikBencana;

class LogistikBencanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $logistikData = [
            [
                'kejadian_id' => 1,
                'nama_barang' => 'Beras',
                'satuan' => 'Kg',
                'stok' => 1000,
                'sumber' => 'BPBD Provinsi',
            ],
            [
                'kejadian_id' => 1,
                'nama_barang' => 'Air Mineral',
                'satuan' => 'Botol',
                'stok' => 500,
                'sumber' => 'PMI',
            ],
            [
                'kejadian_id' => 1,
                'nama_barang' => 'Selimut',
                'satuan' => 'Buah',
                'stok' => 200,
                'sumber' => 'Baznas',
            ],
            [
                'kejadian_id' => 2,
                'nama_barang' => 'Tenda',
                'satuan' => 'Buah',
                'stok' => 50,
                'sumber' => 'BPBD Kabupaten',
            ],
            [
                'kejadian_id' => 2,
                'nama_barang' => 'Obat-obatan',
                'satuan' => 'Paket',
                'stok' => 100,
                'sumber' => 'Dinas Kesehatan',
            ],
        ];

        foreach ($logistikData as $data) {
            LogistikBencana::create($data);
        }
    }
}
