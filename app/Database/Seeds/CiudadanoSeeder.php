<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CiudadanoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'dpi' => '1234567890123',
            'nombre' => 'Test',
            'apellido' => 'User',
            'direccion' => 'Calle Falsa 123',
            'tel_casa' => '1112222',
            'tel_movil' => '999888777',
            'email' => 'test@example.com',
            'fechanac' => '1990-01-01',
            'cod_nivel_acad' => 1,
            'cod_muni' => 1,
            'contra' => password_hash('secret', PASSWORD_DEFAULT)
        ];
        $this->db->table('ciudadanos')->insert($data);
    }
}
?>
