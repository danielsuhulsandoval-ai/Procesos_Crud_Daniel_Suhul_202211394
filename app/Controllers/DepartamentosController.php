<?php

namespace App\Controllers;

use App\Models\DepartamentoModel;
use App\Models\RegionesModel;
use App\Controllers\BaseController;

class DepartamentosController extends BaseController
{
    protected $departamentoModel;

    public function __construct()
    {
        $this->departamentoModel = new DepartamentoModel();
    }

    public function index()
    {
        $data['departamentos'] = $this->departamentoModel->findAll();
        return view('departamentos', $data);
    }

    public function create()
    {
        $regiones = (new RegionesModel())->findAll();
        return view('departamento_form', ['regiones' => $regiones]);
    }

    public function store()
    {
        $post = $this->request->getPost();
        // Validate cod_region exists
        $regionModel = new RegionesModel();
        $codRegion = $post['cod_region'] ?? null;
        if (empty($codRegion) || ! $regionModel->find($codRegion)) {
            return redirect()->back()->with('error', 'Región no válida.');
        }
        $this->departamentoModel->insert($post);
        return redirect()->to('/departamentos');
    }

    public function edit($id)
    {
        $data['departamento'] = $this->departamentoModel->find($id);
        $data['regiones'] = (new RegionesModel())->findAll();
        return view('departamento_form', $data);
    }

    public function update($id)
    {
        $post = $this->request->getPost();
        // Validate cod_region exists
        $regionModel = new RegionesModel();
        $codRegion = $post['cod_region'] ?? null;
        if (empty($codRegion) || ! $regionModel->find($codRegion)) {
            return redirect()->back()->with('error', 'Región no válida.');
        }
        $this->departamentoModel->update($id, $post);
        return redirect()->to('/departamentos');
    }

    public function delete()
    {
        $id = $this->request->getPost('id');
        if (empty($id) || !is_numeric($id)) {
            return redirect()->back()->with('error', 'ID inválido para eliminar.');
        }
        $this->departamentoModel->delete($id);
        return redirect()->to('/departamentos')->with('message', 'Departamento eliminado correctamente.');
    }
}
?>
