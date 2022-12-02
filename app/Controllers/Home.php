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

            return redirect()->to(base_url('/task'))->with('mensaje', '1');
        } else {
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }
    }

    public function signup()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function registro()
    {
        return view('registro');
    }
}
