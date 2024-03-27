<?php

namespace App\Entities;

use App\Entities\Cast\CastJenisLayanan;
use App\Entities\Cast\CastJenisUrgensi;
use CodeIgniter\Entity\Entity;

class Layanan extends Entity
{
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [
        'jenis_layanan_id' => 'jenis_layanan',
        'jenis_urgensi_id' => 'jenis_urgensi',
    ];
    protected $castHandlers = [
        'jenis_layanan' => CastJenisLayanan::class,
        'jenis_urgensi' => CastJenisUrgensi::class,
    ];
    protected $datamap = [
        'jenis_layanan' => 'jenis_layanan_id',
        'jenis_urgensi' => 'jenis_urgensi_id',
    ];
}
