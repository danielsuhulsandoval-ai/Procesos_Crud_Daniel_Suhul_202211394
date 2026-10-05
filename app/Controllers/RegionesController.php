<?php

namespace App\Controllers;
use App\Models\RegionesModel;

class RegionesController extends BaseController
{
    public function index(): string
    {
        $region = new RegionesModel();
        $datos['datos']=$region->findAll();
        return view('regiones',$datos);
    }
    public function insertar()
    {
        
        $datos = [
            'cod_region' => $this->request->getPost('txt_codigo'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'descripcion' => $this->request->getPost('txt_descripcion')
        ];
        $region = new RegionesModel();
        $region->insert($datos);
        return $this->index();



    }
   
    public function eliminar($codigo)
    {
      $region = new RegionesModel();
      $region->delete($codigo);
      return $this->index();  
    }

     public function buscar($codigo)
    {
        $region = new RegionesModel();
        $datos = $region->find($codigo);
        return view('form_modificar_region', ['datos' => $datos]);
    }

     public function modificar()
    {
        $region = new RegionesModel();
        //id del registro a modificar
        $codigo=$this->request->getPost('txt_codigo');
        //recibir datos del formulario
        $datos=[
            'nombre'=>$this->request->getPost('txt_nombre'),
            'descripcion'=>$this->request->getPost('txt_descripcion')
        ];
        $region->update($codigo,$datos);
        return $this->index();
    }
 
}

