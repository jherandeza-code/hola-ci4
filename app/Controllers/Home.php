<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    /**
     * Responde a /home y renderiza la vista app/Views/home.php
     * utilizando el motor de plantillas View Renderer.
     */
    public function home(): string
    {
        $renderer = service('renderer');

        return $renderer->setData([
            'titulo'  => 'Hola mundo',
            'mensaje' => 'Hola mundo utilizando CodeIgniter4 Framework',
            'version' => \CodeIgniter\CodeIgniter::CI_VERSION,
        ])->render('home');
    }
}
