<?php

namespace App\Models;

use CodeIgniter\Model;

class MunicipioModel extends Model
{
    protected $table      = 'municipios';
    protected $primaryKey = 'cod_muni';
    protected $returnType = 'array';
    protected $allowedFields = ['cod_depto', 'nombre_municipio'];
    protected $useTimestamps = true;
}
?>
