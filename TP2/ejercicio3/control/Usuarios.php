<?php

class Usuarios
{
    private $usuarios = [
        'admin' => 'admin',
        'user' => 'user'
    ];

    public function login($username, $password)
    {
        if (array_key_exists($username, $this->usuarios) && $this->usuarios[$username] == $password) {
            return true;
        } else {
            return false;
        }
    }
}
