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

        if ($this->request->getGet()['tab'] == 'pending') {
            $data = $this->model->where('status', 'pending')->findAll();

            // Menggunakan algoritma priority scheduling
            $data = array_map(function ($item) {
                $item->bobot = $item->jenis_urgensi->bobot + $item->jenis_layanan->bobot;
                return $item;
            }, $data);
            usort($data, function ($a, $b) {
                return $a->bobot <=> $b->bobot;
            });

            // Jika prioritas sama, gunakan algoritma FIFO
            usort($data, function ($a, $b) {
                if ($a->bobot === $b->bobot) {
                    return strtotime($a->created_at) - strtotime($b->created_at);
                }
                return 0;
            });
            $rank = 1;
            $data = array_map(function ($item) use (&$rank) {
                $item->rank = $rank++;
                return $item;
            }, $data);
        } elseif ($this->request->getGet()['tab'] == 'inprogress') {
            $data = $this->model->where('status', 'InProgress')->findAll();
        } else {
            $data = $this->model->where('status', 'Completed')->findAll();
        }
        $this->data['items'] = $data;


        return view('Panel/Page/Layanan/index', $this->data);
    }
}
