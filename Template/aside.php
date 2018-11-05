<!-- Ici démarre le code de votre aside -->
<aside class="card border-dark w-50 h-50">
  <div class="card-body d-flex flex-column">
    <i class="fas fa-user-alt pb-4 display-2 mx-auto"></i>
    <ul class="list-group">
    <?php
    foreach [$_SESSION["user"] as $key => $value] {
        echo "<li class='list-group-item'> $key : $value </li>";
    }
    ?>
    </ul>
    <button><a href="#" class="card-link text-center m-1">Se déconnecter</a></button>
  </div>
</aside>
