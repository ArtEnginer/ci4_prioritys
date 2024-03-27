<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class JenisLayanan extends BaseController
{
    public function __construct()
    {
        $this->config = config('Theme');
        $this->data['config'] = $this->config;
    }

    public function index()
    {
        return view('Panel/Page/JenisLayanan/index', $this->data);
    }
}
