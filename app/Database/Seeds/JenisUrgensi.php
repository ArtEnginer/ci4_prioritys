<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisUrgensi extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'biasa',
                'bobot' => 1,
            ],
            [
                'nama' => 'sedang',
                'bobot' => 2,
            ],
            [
                'nama' => 'penting',
                'bobot' => 3,
            ],
            [
                'nama' => 'sangat penting',
                'bobot' => 4,
            ],

        ];
        $this->db->table('jenis_urgensi')->insertBatch($data);
    }
}
