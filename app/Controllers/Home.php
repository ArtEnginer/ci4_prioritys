<?php

namespace App\Controllers;

class Home extends BaseController
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
        $this->data['jenisLayanan'] = $this->jenisLayananModel->findAll();
        $this->data['jenisUrgensi'] = $this->jenisUrgensiModel->findAll();
        return view('Landing/Page/landing', $this->data);
    }
    public function pengajuan()
    {
        $data = $this->request->getPost();
        $data['file'] = $this->request->getFile('file');
        $data['status'] = 'pending';
        $name = $data['file']->getRandomName();
        $data['file']->move('uploads', $name);
        $data['file_persyaratan'] = $name;
        $this->layananModel->insert($data);
        return redirect()->to('/');
    }
}
