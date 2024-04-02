<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Layanan;

class LayananModel extends Model
{
    protected $table            = 'layanan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = Layanan::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama',
        'nik',
        'email',
        'phone',
        'address',
        'file_persyaratan',
        'jenis_urgensi_id',
        'jenis_layanan_id',
        'status',
        'created_at',
        'updated_at',
    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
