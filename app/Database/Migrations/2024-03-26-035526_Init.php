<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Init extends Migration
{
    public function up()
    {
        // Table jenis_layanan
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'bobot' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'persyaratan' => [
                'type' => 'TEXT',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
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
        $this->forge->createTable('jenis_layanan');

        // Table jenis_urgensi
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'bobot' => [
                'type' => 'INT',
                'constraint' => 5,
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
        $this->forge->createTable('jenis_urgensi');

        // Table layanan
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'nik' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => true,
            ],
            'phone' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'address' => [
                'type' => 'TEXT',
            ],
            'file_persyaratan' => [
                'type' => 'TEXT',
            ],

            'jenis_layanan_id' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'jenis_urgensi_id' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'status' => [
                'type' => 'varchar',
                'constraint' => 100,
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
        // $this->forge->addForeignKey('jenis_layanan_id', 'jenis_layanan', 'id', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('jenis_urgensi_id', 'jenis_urgensi', 'id', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('layanan');
    }

    public function down()
    {
        $this->forge->dropTable('jenis_layanan');
        $this->forge->dropTable('jenis_urgensi');
        $this->forge->dropTable('layanan');
    }
}
