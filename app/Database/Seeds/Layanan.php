<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Layanan extends Seeder
{
    public function run()
    {
        // Load Faker library
        $faker = Factory::create();

        // Array to store fake data
        $data = [];

        // Generate fake data
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'jenis_layanan_id' => $faker->numberBetween(1, 10),
                'jenis_urgensi_id' => $faker->numberBetween(1, 5),
                'status' => $faker->randomElement(['Pending', 'InProgress', 'Completed']),
                'nilai_bobot' => $faker->randomFloat(2, 1, 10),
                'prioritas' => $faker->randomElement(['High', 'Medium', 'Low']),
                'created_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
            ];
        }

        // Insert fake data into database
        $this->db->table('layanan')->insertBatch($data);
    }
}
