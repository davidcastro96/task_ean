<?php

namespace App\Controllers;

use App\Models\Usuarios;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function task()
    {
        return view('task');
    }

    public function login()
    {
        $usuario = $this->request->getPost('Username');
        $password = $this->request->getPost('Password');
        $Usuario = new Usuarios();
    }
}
