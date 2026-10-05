<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefreshDepartamentos extends Migration
{
    public function up()
    {
        // Drop the existing table if it exists
        if ($this->db->tableExists('departamentos')) {
            $this->forge->dropTable('departamentos');
        }

        // Create the departamentos table with proper columns
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'region_id' => [
                'type' => 'INT',
                'null' => true,
                'unsigned' => true,
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
        $this->forge->createTable('departamentos');
    }

    public function down()
    {
        $this->forge->dropTable('departamentos');
    }
}
?>
