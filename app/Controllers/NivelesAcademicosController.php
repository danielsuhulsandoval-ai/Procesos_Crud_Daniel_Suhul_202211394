<?php

namespace App\Controllers;

use App\Models\NivelesAcademicosModel;
use App\Controllers\BaseController;

class NivelesAcademicosController extends BaseController
{
    protected $nivelModel;

    public function __construct()
    {
        $this->nivelModel = new NivelesAcademicosModel();
    }

    public function index()
    {
        $data['niveles'] = $this->nivelModel->findAll();
        return view('niveles/index', $data);
    }

    public function create()
    {
        return view('niveles/form');
    }

    public function store()
    {
        $post = $this->request->getPost();
        $this->nivelModel->insert($post);
        return redirect()->to('/niveles');
    }

    public function edit($id)
    {
        $data['nivel'] = $this->nivelModel->find($id);
        return view('niveles/form', $data);
    }

    public function update($id)
    {
        $post = $this->request->getPost();
        $this->nivelModel->update($id, $post);
        return redirect()->to('/niveles');
    }

    public function delete($id)
    {
        $this->nivelModel->delete($id);
        return redirect()->to('/niveles');
    }
}
?>
