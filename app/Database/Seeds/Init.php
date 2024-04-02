<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Init extends Seeder
{
    public function run()
    {
        // call seeders
        $this->call('JenisLayanan');
        $this->call('JenisUrgensi');
        $this->call('Layanan');
    }
}
