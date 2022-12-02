<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TTasks extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'task_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'titulo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tipo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'detalle' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tiempo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('task_id', true);
        $this->forge->createTable('tasks');
    }

    public function down()
    {
        $this->forge->dropTable('tasks');
    }
}
