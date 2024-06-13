<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HelmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    for ($i = 1; $i <= 100; $i++) {
        $randomNumber = $faker->numberBetween(300000, 20000000);
        $formattedNumber = number_format($randomNumber, 0, ',', '.');
        $formattedRupiah = 'Rp ' . $formattedNumber;

        DB::table('helm')->insert([
            'merk'  => $faker->word(),
            'jenis' => $faker->word(),
            'type'  => $faker->word(),
            'warna' => $faker->safeColorName(),
            'harga' => $formattedRupiah
        ]);
    }
    }
}
