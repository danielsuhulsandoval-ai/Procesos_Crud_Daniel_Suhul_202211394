<?php

namespace App\Controllers;

use App\Models\DepartamentoModel;
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
        return view('departamento_form');
    }

    public function store()
    {
        $post = $this->request->getPost();
        $this->departamentoModel->insert($post);
        return redirect()->to('/departamentos');
    }

    public function edit($id)
    {
        $data['departamento'] = $this->departamentoModel->find($id);
        return view('departamento_form', $data);
    }

    public function update($id)
    {
        $post = $this->request->getPost();
        $this->departamentoModel->update($id, $post);
        return redirect()->to('/departamentos');
    }

    public function delete($id)
    {
        $this->departamentoModel->delete($id);
        return redirect()->to('/departamentos');
    }
}
?>
