<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PoskoBencana;
use App\Models\KejadianBencana;
use Faker\Factory as Faker;

class PoskoBencanaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Ambil semua ID kejadian yang valid
        $kejadianIds = KejadianBencana::pluck('kejadian_id')->toArray();

        // Jika kosong, hentikan proses (lebih aman daripada dummy)
        if (empty($kejadianIds)) {
            $this->command->warn("⚠ Tidak ada data kejadian_bencana. Jalankan seeder KejadianBencanaSeeder dulu.");
            return;
        }

        for ($i = 0; $i < 100; $i++) {
            PoskoBencana::create([
                'kejadian_id'      => $faker->randomElement($kejadianIds),
                'nama'             => 'Posko ' . $faker->city(),
                'alamat'           => $faker->address(),
                'kontak'           => $faker->phoneNumber(),
                'penanggung_jawab' => $faker->name(),
                'foto'             => null,
            ]);
        }
    }
}
