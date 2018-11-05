<!-- Voici la page qui va afficher le formulaire dans le template -->

<!-- Start Header -->
<?php include("Template/header.php"); ?>

<!-- Start Main -->
<main class="container-fluid mt-5 mb-4 w-75">
<!-- message d'erreur PHP -->
 <?php

if(isset($_POST["message"])) {
  $message = htmlspecialchars($_POST["message"]);
  echo "<div class='alert alert-danger role=alert'>" . $message . "</div>";
}
 ?>

<!-- Start Form -->
 <form class="mx-auto" action="login.php" method="post">
    <div class="form-group row">
      <label for="inputText" class="col-12 col-form-label">Nom</label>
      <div class="col">
        <input type="text" class="form-control" name="name">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-12 col-form-label">Mot de Passe</label>
      <div class="col-12 mb-3">
        <input type="password" class="form-control" name="password">
      </div>
  </div>
    <p class="text-center"><button type="submit" class="btn btn-primary mb-5">Valider</button></p>
 </form>

</main>

<!-- Start Footer -->
<?php include("Template/footer.php"); ?>
