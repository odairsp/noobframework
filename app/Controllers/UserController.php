<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $params = [
            'user' => [
                'name' => $request->post()['name'],
                'email' => $request->post()['pwd'],
            ]
        ];

        $this->view('home', $params);
    }
}