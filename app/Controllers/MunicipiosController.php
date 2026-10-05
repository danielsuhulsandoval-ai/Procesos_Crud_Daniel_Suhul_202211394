<?php

namespace App\Controllers;

use App\Models\MunicipioModel;
use App\Controllers\BaseController;

class MunicipiosController extends BaseController
{
    protected $municipioModel;

    public function __construct()
    {
        $this->municipioModel = new MunicipioModel();
    }

    public function index()
    {
                $data['municipios'] = $this->municipioModel->findAll();
        return view('municipios', $data);
    }

    public function create()
    {
        return view('municipios_form');
    }

    public function store()
    {
        $post = [
            'departamento_id' => $this->request->getPost('departamento_id'),
            'nombre' => $this->request->getPost('nombre')
        ];
        $this->municipioModel->insert($post);
        return redirect()->to('/municipios');
    }

    public function edit($id)
    {
        $data['municipio'] = $this->municipioModel->find($id);
        return view('municipios_form', $data);
    }

    public function update($id)
    {
        $post = $this->request->getPost();
        $this->municipioModel->update($id, $post);
        return redirect()->to('/municipios');
    }

    public function delete($id)
    {
        $this->municipioModel->delete($id);
        return redirect()->to('/municipios');
    }
}
?>
