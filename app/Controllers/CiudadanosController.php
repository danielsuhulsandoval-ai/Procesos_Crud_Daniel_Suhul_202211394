<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CiudadanosController extends BaseController
{
    protected $ciudadanoModel;

    public function __construct()
    {
        $this->ciudadanoModel = new \App\Models\CiudadanoModel();
    }

    public function index()
    {
        $data['ciudadanos'] = $this->ciudadanoModel->findAll();
        return view('ciudadanos', $data);
    }

    public function create()
    {
        return view('ciudadanos_form');
    }

    public function store()
    {
        $post = [
            'dpi' => $this->request->getPost('dpi'),
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'direccion' => $this->request->getPost('direccion'),
            'tel_casa' => $this->request->getPost('tel_casa'),
            'tel_movil' => $this->request->getPost('tel_movil'),
            'fechanac' => $this->request->getPost('fechanac'),
            'cod_nivel_acad' => $this->request->getPost('cod_nivel_acad'),
            'cod_muni' => $this->request->getPost('cod_muni'),
            'contra' => $this->request->getPost('contra')
        ];
        $this->ciudadanoModel->insert($post);
        return redirect()->to('/ciudadanos');
    }

    public function edit($dpi)
    {
        $data['ciudadano'] = $this->ciudadanoModel->find($dpi);
        return view('ciudadanos_form', $data);
    }

    public function update($dpi)
    {
        $post = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'direccion' => $this->request->getPost('direccion'),
            'tel_casa' => $this->request->getPost('tel_casa'),
            'tel_movil' => $this->request->getPost('tel_movil'),
            'fechanac' => $this->request->getPost('fechanac'),
            'cod_nivel_acad' => $this->request->getPost('cod_nivel_acad'),
            'cod_muni' => $this->request->getPost('cod_muni'),
            'contra' => $this->request->getPost('contra')
        ];
        $this->ciudadanoModel->update($dpi, $post);
        return redirect()->to('/ciudadanos');
    }

    public function delete($dpi)
    {
        $this->ciudadanoModel->delete($dpi);
        return redirect()->to('/ciudadanos');
    }
}
