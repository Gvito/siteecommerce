<!-- voici la page qui n'est accessible que si l'utilisateur est connecté, qui affiche les produit et les informations sur l'utilisateur -->

<!-- Start Header -->
<?php
// début de la session
session_start();
// vérification si l'utilisateur est bien connecté
if(!isset($_SESSION["user"])){
  header("Location: index.php");
  exit;
}
require "Model/function.php";
include("Template/header.php");

$products = getProducts();
 ?>

<!-- Start Main -->
<main class="container-fluid pb-4">
  <h3 class="mx-auto text-center mb-4 border border-dark w-25 pt-2 pb-2 rounded">Nos produits</h3>
    <section class="row">
       <?php foreach ($products as $key => $product) { ?>
      <article class="col-12 col-sm-6">
        <div class="card bg-light mb-3">
          <img class="card-img-top" src="img/pcone.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $product["name"]; ?></h5>
            <p class="card-text"><?php echo $product["description"]; ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Prix : <?php echo $product["price"]; ?></li>
            <li class="list-group-item">Lieu de production: <?php echo $product["made_in"]; ?></li>
            <li class="list-group-item">Catégorie : <?php echo $product["category"]; ?></li>
          </ul>
        </div>
      </article>
      <?php
        }
      ?>
    </section>

  <?php include("Template/aside.php"); ?>

</main>

<!-- Start Footer -->
<?php include("Template/footer.php"); ?>
