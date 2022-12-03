<?php

namespace App\Controllers;

use App\Models\Usuarios;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
    }

    public function task()
    {
        return view('task');
    }
    // función para iniciar con el login y validar los datos de inicio de sesión
    public function login()
    {
        $usuario = $this->request->getPost('u'); //usuario en html
        $password = $this->request->getPost('p'); //password en html
        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

        if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password'])) {
            $data = [
                "nombre" => $datosUsuario[0]['usuario']
            ];
            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/task'));
        } else {
            return redirect()->to(base_url('/'));
        }
    }
    // función o método que permite cerrar la sesión que el usuario haya creado
    public function signoff()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
    // función que permite abrir el formulario de registro
    public function registroUsuario()
    {
        $password = $this->request->getPost('pass');
        $passwordc = $this->request->getPost('passc');
        $usuario = $this->request->getPost('use');
        $nombre = $this->request->getPost('nom');
        $apellido = $this->request->getPost('ape');
        $email = $this->request->getPost('email');
        $Usuario = new Usuarios();

        $Usuario->crearUsuario([
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'usuario' => $usuario,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email'    => $email,
        ]);
        return view('registro');
    }

    public function registro()
    {
        return view('registro');
    }
}
