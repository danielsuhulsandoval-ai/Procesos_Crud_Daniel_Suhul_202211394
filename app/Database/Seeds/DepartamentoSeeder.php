<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nombre' => 'Departamento A', 'region_id' => 1],
            ['nombre' => 'Departamento B', 'region_id' => 2],
            ['nombre' => 'Departamento C', 'region_id' => 1],
        ];
        $this->db->table('departamentos')->insertBatch($data);
    }
}
?>
