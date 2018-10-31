<!-- Voici la page qui va afficher le formulaire dans le template -->

<!-- Start Header -->
<?php include("Template/header.php"); ?>

<!-- Start Main -->
<main class="container-fluid mt-5 mb-4 w-75">
<!-- Start Form -->
 <form class="mx-auto">
    <div class="form-group row">
      <label for="inputEmail3" class="col-12 col-form-label">Email</label>
      <div class="col-12">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-12 col-form-label">Mot de Passe</label>
      <div class="col-12 mb-3">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Mot de Passe">
      </div>
    </div>
    <button type="submit" class="btn btn-primary mb-5">Valider</button>
 </form>

</main>

<!-- Start Footer -->
<?php include("Template/footer.php"); ?>
