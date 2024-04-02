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
        $this->model = new \App\Models\LayananModel();
    }

    public function index()
    {
        $data = $this->model->findAll();

        // Menggunakan algoritma priority scheduling
        $data = array_map(function ($item) {
            $item->priority = $item->jenis_urgensi->bobot + $item->jenis_layanan->bobot;
            return $item;
        }, $data);
        usort($data, function ($a, $b) {
            return $a->priority <=> $b->priority;
        });

        // Jika prioritas sama, gunakan algoritma FIFO
        usort($data, function ($a, $b) {
            if ($a->priority === $b->priority) {
                return strtotime($a->created_at) - strtotime($b->created_at);
            }
            return 0; // Prioritas tidak sama, tidak perlu pengurutan tambahan
        });

        $this->data['items'] = $data;

        return view('Panel/Page/Layanan/index', $this->data);
    }
}
