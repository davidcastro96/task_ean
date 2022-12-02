<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreaUsuario extends Seeder
{
    public function run()
    {
        $password = password_hash("123", PASSWORD_DEFAULT);
        $usuario = "dcastro";
        $nombre = "David";
        $apellido = "Castro";
        $email = "davidcastro0796@outlook.es";
        $data = [
            'password' => $password,
            'usuario' => $usuario,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email'    => $email,
        ];

        // Using Query Builder
        $this->db->table('usuarios')->insert($data);
    }
}
