<?php
  include __DIR__ . '/database.php';
  require_once(__DIR__ . '/User.php');
  require_once(__DIR__ . '/Admins.php');
  require_once(__DIR__ . '/Employee.php');
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
      <h1>Blog users</h1>

      <div>
        <h2>Amministratori:</h2>
        <!-- Stampo a schermo tutti i dati degli amministratori del blog -->
        <?php foreach ($amministratori as $admin) { ?>
          <ul>
            <?php $singoloAdmin = new Admins($admin['nome'], $admin['cognome'], $admin['email']); ?>
            <?php $singoloAdmin->edit_article = $admin['Modifica articolo']; ?>
            <?php $singoloAdmin->delete_article = $admin['Elimina articolo']; ?>

            <li> Admin: <b><?php echo $singoloAdmin->userData(); ?> </b></li>
            <li> Email: <b><?php echo $singoloAdmin->userEmail(); ?> </b></li>
            <li> Modifica articolo: <b><?php echo $singoloAdmin->getEditRight(); ?> </b></li>
            <li> Rimozione articolo: <b><?php echo $singoloAdmin->getDeleteRight(); ?> </b></li>
          </ul>
        <?php } ?>
      </div>

      <div>
        <h2>Team:</h2>
        <!-- Stampo a schermo tutti i dati degli amministratori del blog -->
        <?php foreach ($employees as $employee) { ?>
          <ul>
            <?php $teamMember = new Employee($employee['nome'], $employee['cognome'], $employee['email']); ?>
            <?php $teamMember->position = $employee['Ruolo']; ?>
            <?php $exp = $teamMember->experience = $employee['Anni di esperienza']; ?>
            <?php $teamMember->setExperience($exp);?>

            <li> Admin: <b><?php echo $teamMember->userData(); ?> </b></li>
            <li> Email: <b><?php echo $teamMember->userEmail(); ?> </b></li>
            <li> Ruolo: <b><?php echo $teamMember->getPosition(); ?> </b></li>
            <li> Esperienza: <b><?php echo $teamMember->getExperience(); ?> </b></li>
          </ul>
        <?php } ?>
      </div>

      <div>
        <h2>Dati degli utenti:</h2>
          <!-- Stampo a schermo tutti i dati degli utenti -->
          <?php foreach ($utenti as $utente) { ?>
            <ul>
              <?php $singoloUtente = new User($utente['nome'], $utente['cognome'], $utente['email']); ?>
              <li> Utente: <b><?php echo $singoloUtente->userData(); ?> </b></li>
              <li> Email: <b><?php echo $singoloUtente->userEmail(); ?> </b></li>
            </ul>
          <?php } ?>
      </div>

   </body>
 </html>
