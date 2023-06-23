<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\User;

class SessionController extends Controller
{
    public function index()
    {
        $email = 'rge@domain.com';
        $user = new User();
        $targetUser = $user->find(conditions: ["email" => $email]);

        if (!$targetUser) {
            $this->view('home', ['user' => ['name' => 'Não encontrado', 'email' => null]]);
        } else {
            $this->view('home', ['user' => $targetUser[0]]);
        }
    }
}
