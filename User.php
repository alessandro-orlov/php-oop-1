<?php

// Classe User
class User
{
    public $name;
    public $lastname;
    public $email;

    public function __construct($_nome, $_cognome, $_email)
    {
        $this->name = $_nome;
        $this->lastname = $_cognome;
        $this->email = $_email;
    }

    public function getUserData()
    {
        return $this->name . ' ' . $this->lastname;
    }

    public function getUserEmail()
    {
        return $this->email;
    }
}
