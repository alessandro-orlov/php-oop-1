<?php
  // Classe User
  class User {
    public $name;
    public $lastname;
    public $email;

    public function __construct($_nome, $_cognome, $_email) {
      $this->name = $_nome;
      $this->lastname = $_cognome;
      $this->email = $_email;
    }

    public function userData() {
      return $this->name . ' ' . $this->lastname . ' | ' . 'email: ' . $this->email . '<br>';
    }
  };
?>
