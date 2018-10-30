<!-- voici la page qui n'est accessible que si l'utilisateur est connecté, qui affiche les produit et les informations sur l'utilisateur -->

<!-- Start Header -->
<?php include("Template/header.php"); ?>

<!-- Start Main -->
<main class="container-fluid">
  <div class="titleandsection">
  <h3 class="text-center mb-4<">Nos produits</h3>
    <section class="row">
      <article class="col-12 col-sm-6">
        <div class="card border-light mb-3">
          <img class="card-img-top" src="img/pcone.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-text"> HP PC Portable 17 <span class="badge badge-secondary">N°1 des ventes</span> </h3>
            <ul class="card-text">
              <li>CPU : Intel Celeron N4000 - 1.1 GHz </li>
              <li>RAM : 4 Go (1 x 4 Go) </li>
              <li>500 Go HDD SATA - 5400 tours-min </li>
              <li>Processeur graphique : Intel UHD Graphics 600 </li>
            </ul>
          </div>
        </div>
      </article>
      <article class="col-12 col-sm-6">
        <div class="card border-light mb-3">
          <img class="card-img-top" src="img/pctwo.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-text">HP PC Portable Stream 14</h3>
            <ul class="card-text">
              <li>CPU : Intel Celeron N4000 - 1.1 GHz </li>
              <li>RAM : 4 Go (1 x 4 Go) </li>
              <li>500 Go HDD SATA - 5400 tours-min </li>
              <li>Processeur graphique : Intel UHD Graphics 600 </li>
            </ul>
          </div>
        </div>
      </article>
      <article class="col-12 col-sm-6">
        <div class="card border-light mb-3">
          <img class="card-img-top" src="img/pcthree.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-text"> ACER Aspire A315-21 </h3>
            <ul class="card-text">
              <li>CPU : Intel Celeron N4000 - 1.1 GHz </li>
              <li>RAM : 4 Go (1 x 4 Go) </li>
              <li>500 Go HDD SATA - 5400 tours-min </li>
              <li>Processeur graphique : Intel UHD Graphics 600 </li>
            </ul>
          </div>
        </div>
      </article>
      <article class="col-12 col-sm-6">
        <div class="card border-light mb-3">
          <img class="card-img-top" src="img/pcfour.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-text"> ASUS R702UA-BX479T </h3>
            <ul class="card-text">
              <li>CPU : Intel Celeron N4000 - 1.1 GHz </li>
              <li>RAM : 4 Go (1 x 4 Go) </li>
              <li>500 Go HDD SATA - 5400 tours-min </li>
              <li>Processeur graphique : Intel UHD Graphics 600 </li>
            </ul>
          </div>
        </div>
      </article>
    </section>
  </div>

  <?php include("Template/aside.php") ?>

</main>

<!-- Start Footer -->
<?php include("Template/footer.php"); ?>
