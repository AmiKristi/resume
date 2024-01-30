<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kdrama extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'drama_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'drama_genre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'drama_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('dramas');
    }

    public function down()
    {
        $this->forge->dropTable('dramas');
    }
}
