<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\JenisLayanan;

class JenisLayananModel extends Model
{
    protected $table            = 'jenis_layanan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = JenisLayanan::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'bobot', 'persyaratan', 'deskripsi'];
    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
