<!-- Voici la page qui va recevoir les données du formulaire, les traiter et rediriger l'utilisateur vers la page adéquate -->
<?php

require "function.php";

$users = getUsers();

foreach ($_POST as $key => $value) {
  $_POST[$key] = strtoupper($value);
}

foreach ($users as $key => $user) {
  echo $users ["name"] . " " . $users["firstName"];
}

foreach ($users as $key => $user) {
  if($user["name"] === $_POST["name"] && $user["firstName"] === $_POST["firstName"]) {
    main("Location: index.php");
    exit;
  }
}

main("Location: index.php/message=Attention, Nom ou Mot de Passe incorrect");
exit;




 ?>
