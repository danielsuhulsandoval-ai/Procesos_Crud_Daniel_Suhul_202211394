<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMunicipios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'departamento_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('departamento_id', 'departamentos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('municipios');
    }

    public function down()
    {
        $this->forge->dropTable('municipios');
    }
}
?>
