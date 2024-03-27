<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Layanan extends BaseController
{
    public function __construct()
    {
        $this->config = config('Theme');
        $this->data['config'] = $this->config;
    }

    public function index()
    {
        return view('Panel/Page/Layanan/index', $this->data);
    }
}
