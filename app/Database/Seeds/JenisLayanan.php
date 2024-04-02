<?php

namespace App\Database\Seeds;

use Faker\Factory;

use CodeIgniter\Database\Seeder;

class JenisLayanan extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $data = [];
        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'nama' => $faker->word(),
                'bobot' => $faker->numberBetween(1, 5),
                'persyaratan' => $faker->sentence(),
                'deskripsi' => $faker->paragraph(),
                'created_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
            ];
        }
        $this->db->table('jenis_layanan')->insertBatch($data);
    }
}
