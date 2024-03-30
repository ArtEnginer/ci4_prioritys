<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use stdClass;
use App\Entities\JenisUrgensi as JenisUrgensiEntity;

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

    public function create()
    {
        return view('Panel/Page/JenisUrgensi/add', $this->data);
    }

    public function store()
    {
        $data = new stdClass;
        $data->post = $this->request->getPost();
        $data->rules = [
            'nama' => 'required|is_unique[jenis_urgensi.nama]',
            'bobot' => 'required|is_unique[jenis_urgensi.bobot]',
        ];
        if (!$this->validate($data->rules)) {
            $data->errors = $this->validator->getErrors();
            $data->errors = implode("<br>", $data->errors);
            return redirect()->back()->with('error', $data->errors)->withInput();
        }
        $data->item = new JenisUrgensiEntity($data->post);
        $this->model->save($data->item);
        return redirect()->route('data.jenis.urgensi')->with('message', 'Data Baru telah berhasil ditambahkan');;
    }

    public function edit($id)
    {
        $this->data['item'] = $this->model->find($id);
        return view('Panel/Page/JenisUrgensi/edit', $this->data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $item = $this->model->find($id);
        $item->fill($data);
        if ($item->hasChanged()) {
            $this->model->save($item);
            return redirect()->route('data.jenis.urgensi')->with('message', 'Data telah berhasil diubah');;
        }
        return redirect()->route('data.jenis.urgensi')->with('message', 'Tidak ada perubahan data');
    }
}
