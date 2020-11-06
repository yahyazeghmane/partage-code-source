<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="dashboard.php">Gestoon Stock</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="stock.php">Stock</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="entree.php">Entré</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sortie.php">Sortie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categories.php">Categorie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fournisseur.php">Fournisseur</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Commande
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="commande.php">Nouveau Commande</a>
          <a class="dropdown-item" href="consultercmd.php">Consulter Commande</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reception.php">Reception</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          yahya
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="members.php?do=Edit&userid=<?php echo $_SESSION['ID'] ?>">Edit Profile</a>
          <a class="dropdown-item" href="dashboard.php">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
   
  </div>
</nav>