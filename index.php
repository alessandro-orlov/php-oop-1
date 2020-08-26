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

  // array con dati degli utenti
  $utenti = [
    [
      'nome' => 'Alessandro',
      'cognome' => 'Orlov',
      'email' => 'alex-orlov@mail.com',
    ],
    [
      'nome' => 'Marco',
      'cognome' => 'Rossi',
      'email' => 'marcorossi@mail.com',
    ],
    [
      'nome' => 'Ernesto',
      'cognome' => 'Verdi',
      'email' => 'e-verdi@gmail.com',
    ],
  ];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
    <h1>Dati degli utenti:</h1>
    <ul>
      <!-- Stampo a schermo tutti i dati degli utenti -->
      <?php foreach ($utenti as $utente) { ?>
        <?php $singoloUtente = new User($utente['nome'], $utente['cognome'], $utente['email']); ?>
        <li> <?php echo $singoloUtente->userData() . '<br>'; ?> </li>
      <?php } ?>
    </ul>
   </body>
 </html>
