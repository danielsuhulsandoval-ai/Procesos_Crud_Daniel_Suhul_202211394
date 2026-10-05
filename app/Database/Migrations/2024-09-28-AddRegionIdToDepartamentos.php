<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRegionIdToDepartamentos extends Migration
{
    public function up()
    {
        $fields = [
            'region_id' => [
                'type' => 'INT',
                'null' => true,
                'unsigned' => true,
            ],
        ];
        $this->forge->addColumn('departamentos', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('departamentos', 'region_id');
    }
}
?>
