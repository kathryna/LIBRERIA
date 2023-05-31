<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
      $datos=[
                  "titulo" => "Bienvenidos a UMECIS"
              ];
        return view('welcome_message', $datos);
    }

    public function inicio() {

      return view('inicio');

    }
}
