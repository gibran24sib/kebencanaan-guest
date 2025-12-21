<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KejadianBencana;
use Faker\Factory as Faker;

class KejadianBencanaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $jenisBencana = [
            'Banjir',
            'Kebakaran',
            'Longsor',
        ];

        // Sesuai enum migration
        $status = [
            'Ringan',
            'Sedang',
            'Berat',
            'Selesai'
        ];

        for ($i = 0; $i < 100; $i++) {
            KejadianBencana::create([
                'jenis_bencana'   => $faker->randomElement($jenisBencana),
                'tanggal'         => $faker->dateTimeBetween('-6 months', 'now'),
                'lokasi_text'     => $faker->streetAddress() . ", " . $faker->city(),
                'rt'              => (string) $faker->numberBetween(1, 20),
                'rw'              => (string) $faker->numberBetween(1, 20),
                'dampak'          => $faker->sentence(12),
                'status_kejadian' => $faker->randomElement($status),
                'keterangan'      => $faker->sentence(15),
            ]);
        }
    }
}
