<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreaUsuario extends Seeder
{
    public function run()
    {
        $password = password_hash("123456", PASSWORD_DEFAULT);
        $usuario = "prueba";
        $nombre = "prueba";
        $apellido = "prueba";
        $email = "prueba@outlook.es";
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
