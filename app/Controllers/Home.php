<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function getIndex()
    {   
        return
            view('templates/header') .
            view('templates/navbar') .
            view('templates/sidebar') .
            view('layouts/wrapper', ['view' => 'home/Index']) .
            view('templates/footer');
    }
}
