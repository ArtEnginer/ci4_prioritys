<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class JenisUrgensi extends BaseController
{
    public function __construct()
    {
        $this->config = config('Theme');
        $this->data['config'] = $this->config;
        $this->model = new \App\Models\JenisUrgensiModel();
    }

    public function index()
    {
        $this->data['jenis_urgensi'] = $this->model->findAll();
        return view('Panel/Page/JenisUrgensi/index', $this->data);
    }
}
