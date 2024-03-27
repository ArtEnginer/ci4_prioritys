<?php

namespace App\Entities\Cast;

use CodeIgniter\Entity\Cast\BaseCast;

class CastJenisLayanan extends BaseCast
{
    public static function get($value, array $params = [])
    {
        $model = model('JenisLayananModel');
        return $model->find($value);
    }
}
