<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Entities\JenisUrgensi as JenisUrgensiEntity;
use stdClass;

class JenisUrgensi extends BaseController
{
    protected $jenisUrgensiModel;
    public function __construct()
    {
        $this->model = model('App\Models\JenisUrgensiModel');
    }
    public function create()
    {
        $data = new stdClass;
        $data->post = $this->request->getPost();
        $data->rules = [
            'bobot' => 'required|is_unique[jenis_urgensi.bobot]',
        ];
        if (!$this->validate($data->rules)) {
            $data->errors = $this->validator->getErrors();
            $data->errors = implode("<br>", $data->errors);
            return redirect()->back()->with('error', $data->errors)->withInput();
        }
        $data->item = new JenisUrgensiEntity($data->post);
        $this->model->save($data->item);
        return redirect()->route('data-jenis-urgensi')->with('message', 'Data Baru telah berhasil ditambahkan');;
    }

    public function edit($id)
    {
        $data = new stdClass;
        $data->post = $this->request->getPost();
        $data->item = $this->model->find($id);
        $data->item->fill($data->post);
        return redirect()->route('data-jenis-urgensi')->with('message', 'Data telah berhasil diubah');;
    }

    public function delete($id)
    {
        if (isset($id)) {
            $this->model->delete($id);
            return redirect()->route('data-jenis-urgensi')->with('message', 'Data telah berhasil dihapus');;
        }
    }
}
