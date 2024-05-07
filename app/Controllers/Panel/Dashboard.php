<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

    public function __construct()
    {
        $this->config = config('Theme');
        $this->data['config'] = $this->config;
        $this->jenisLayananModel = new \App\Models\JenisLayananModel();
        $this->jenisUrgensiModel = new \App\Models\JenisUrgensiModel();
        $this->layananModel = new \App\Models\LayananModel();
    }
    public function index(): string
    {
        $this->data['jmlJenisLayanan'] = $this->jenisLayananModel->countAll();
        $this->data['jmlJenisUrgensi'] = $this->jenisUrgensiModel->countAll();
        $this->data['jmlLayananPending'] = $this->layananModel->where('status', 'pending')->countAllResults();
        $this->data['jmlLayananProgress'] = $this->layananModel->where('status', 'InProgress')->countAllResults();
        $this->data['jmlLayananSuccess'] = $this->layananModel->where('status', 'Completed')->countAllResults();

        return view('Panel\Page\panel', $this->data);
    }
}
