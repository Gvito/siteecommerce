<!-- Voici la page qui va recevoir les données du formulaire, les traiter et rediriger l'utilisateur vers la page adéquate -->
<?php

require "function.php";
$users = getUsers();


foreach ($users as $key => $value) {

  if($value["name"] === $_POST["name"] && $value["password"] === $_POST["password"]) {
    header("Location: products.php");
    exit;
  }

}

header("Location: index.php");
exit;


 ?>


<!-- ?message= Attention, Nom ou Mot de Passe incorrect" -->
