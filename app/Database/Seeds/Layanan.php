<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Layanan extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'user_id' => $faker->numberBetween(1, 10),
                'jenis_layanan_id' => $faker->numberBetween(1, 5),
                'jenis_urgensi_id' => $faker->numberBetween(1, 4),
                'status' => $faker->randomElement(['Pending', 'InProgress', 'Completed']),
                'created_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
            ];
        }
        $this->db->table('layanan')->insertBatch($data);
    }
}
