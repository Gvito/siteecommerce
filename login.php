<!-- Voici la page qui va recevoir les données du formulaire, les traiter et rediriger l'utilisateur vers la page adéquate -->
<?php
// envoie des données du formulaire, redirection sur la page Function.php
require "Model/function.php";

if(!empty($_POST)) {
  var_dump($_POST);

  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  $users = getUsers();
  var_dump($users);

  foreach ($users as $user) {
    if($user["name"] === $_POST["user_name"] && $user["password"] === $_POST["user_password"]) {

      session_start();
      $_SESSION["user"] = $user;
      header("Location: products.php");
      exit;
    }
  }

  header("Location: index.php");
  exit;

// $message = "Attention, Nom ou Mot de Passe incorrect";
}


 ?>
