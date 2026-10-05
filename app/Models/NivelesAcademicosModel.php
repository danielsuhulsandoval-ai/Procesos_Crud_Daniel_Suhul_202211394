<?php

namespace App\Models;

use CodeIgniter\Model;

class NivelesAcademicosModel extends Model
{
    protected $table = 'nivelesacademicos';
    protected $primaryKey = 'cod_nivel_acad';
    protected $allowedFields = [
        'cod_nivel_acad',
        'nombre',
        'descripcion'
    ];
    protected $useTimestamps = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
?>
