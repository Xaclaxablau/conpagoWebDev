<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function getIndex()
    {
        return
            view('login/index');
    }
}
