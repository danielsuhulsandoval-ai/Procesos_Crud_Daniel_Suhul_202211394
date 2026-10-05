<?php

namespace App\Models;

use CodeIgniter\Model;

class NivelesAcademicosModel extends Model
{
    protected $table = 'nivelesacademicos';
    protected $primaryKey = 'cod_nivel_acad';
    protected $allowedFields = [
        'nombre',
        'descripcion'
    ];
    protected $useTimestamps = true;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
?>
