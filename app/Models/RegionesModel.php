<?php

namespace App\Models;

use CodeIgniter\Model;

class RegionesModel extends Model
{
    protected $table = 'regiones';
    protected $returnType = 'array';
    protected $primaryKey = 'cod_region';
    protected $allowedFields    = [
        'cod_region',
        'nombre',
        'descripcion'
    ];

}
