<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisLayanan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'surat keterangan penghasilan orang tua',
                'bobot' => 1,
            ],
            [
                'nama' => 'surat keterangan usaha ',
                'bobot' => 2,
            ],
            [
                'nama' => 'surat keterangan domisili ',
                'bobot' => 3,
            ],
            [
                'nama' => 'surat pengantar SKCK  ',
                'bobot' => 4,
            ],
            [
                'nama' => 'surat keterangan tidak mampu ',
                'bobot' => 5,
            ],
        ];
        $this->db->table('jenis_layanan')->insertBatch($data);
    }
}
