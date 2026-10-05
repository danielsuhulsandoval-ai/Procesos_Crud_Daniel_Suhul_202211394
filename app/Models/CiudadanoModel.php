<?php

namespace App\Models;

use CodeIgniter\Model;

class CiudadanoModel extends Model
{
    protected $returnType = 'array';

    protected $table = 'ciudadanos';
    protected $primaryKey = 'dpi';
    protected $allowedFields = [
        'dpi',
        'nombre',
        'apellido',
        'direccion',
        'tel_casa',
        'tel_movil',
        'email',
        'fechanac',
        'cod_nivel_acad',
        'cod_muni',
        'contra'
    ];

    // Validation rules (can be adjusted later)
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
?>
