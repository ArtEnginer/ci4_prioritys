<?php

namespace App\Entities\Cast;

use CodeIgniter\Entity\Cast\BaseCast;

class CastJenisUrgensi extends BaseCast
{
    public static function get($value, array $params = [])
    {
        $model = model('JenisUrgensiModel');
        return $model->find($value);
    }
}
