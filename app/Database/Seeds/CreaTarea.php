<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreaTarea extends Seeder
{
    public function run()
    {
        $titulo = "primera tarea";
        $tipo = "personal"; //tipo de tarea PERSONAL, TRABAJO, ESTUDIO
        $detalle = "descripcion de una tarea"; //descripcion de tarea
        $tiempo = "2";
        $data = [
            'titulo' => $titulo,
            'tipo' => $tipo,
            'detalle' => $detalle,
            'tiempo' => $tiempo,
        ];

        // Using Query Builder
        $this->db->table('tasks')->insert($data);
    }
}
