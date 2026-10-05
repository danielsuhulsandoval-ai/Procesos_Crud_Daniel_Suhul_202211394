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
        $departamentos = (new \App\Models\DepartamentoModel())->findAll();
        return view('municipios_form', ['departamentos' => $departamentos]);
    }

    public function store()
    {
        $codDepto = $this->request->getPost('cod_depto');
        if (empty($codDepto) || !is_numeric($codDepto)) {
            return redirect()->back()->with('error', 'Seleccione un Departamento válido.');
        }
        $departamentoModel = new \App\Models\DepartamentoModel();
        if (! $departamentoModel->find($codDepto)) {
            return redirect()->back()->with('error', 'Departamento no encontrado.');
        }
        $post = [
            'cod_depto' => (int) $codDepto,
            'nombre_municipio' => $this->request->getPost('nombre_municipio')
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
        $id = (int) $id;
        if ($id <= 0) {
            return redirect()->back()->with('error', 'ID de municipio no válido.');
        }
        $this->municipioModel->delete($id);
        return redirect()->to('/municipios');
    }
}
?>
