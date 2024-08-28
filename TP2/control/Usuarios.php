<?php

class Usuarios
{
    private $usuarios = [
        'admin' => 'adminadmin123',
        'user' => 'user1234'
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
