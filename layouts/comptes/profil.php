<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
      header("Location: ../../login.php");
      exit;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
      <title>Profil</title>
      <link rel="stylesheet" href="../../assets/vendors/bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="../../assets/vendors/fontawesome/css/all.min.css" />
      <link rel="stylesheet" href="../../style.css" type="text/css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
      </script>
</head>

<body>

      <!-- Navbar -->
      <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">

                  <div class="container-fluid">
                        <!-- Toggle button -->
                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <i class="fas fa-bars"></i>
                        </button>

                        <!-- Collapsible wrapper -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <!-- Navbar brand -->
                              <a class="navbar-brand logo">CESITAGE</a>
                        </div>
                        <!-- Collapsible wrapper -->
                        <div class="" id="navbarNavAltMarkup">
                              <div class="navbar-nav">
                                    <a class="nav-link" href="../homePage.php">Acceuil</a>
                                    <a class="nav-link" href="../offres/listOffre.php">Offres</a>
                                    <a class="nav-link" href="../entreprise/listEntreprise.php">Entreprises</a>
                              </div>
                        </div>

                        <div class="dropdown">
                              <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo htmlspecialchars($_SESSION["username"]); ?>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Profil</a></li>
                                    <li><a class="dropdown-item" href="../logout.php" class="">Se déconnecter</a></li>
                              </ul>
                        </div>
                  </div>
            </nav>
      </div>

      <div class="bg-secondary">
            <div class="container">
                  <div class="card text-center mb-5">
                        <div class="row g-0">
                              <div class="col-md-4">
                                    <img src="" alt="" class="img-fluid rounded-start" />
                              </div>
                              <div class="col-md-8">
                                    <div class="card-body">
                                          <h2 class="card-title"><?php echo htmlspecialchars($_SESSION["username"]); ?>
                                          </h2>
                                          <p class="card-text">
                                                Centre :
                                          </p>
                                          <p class="card-text">
                                                Promotion :
                                          </p>
                                    </div>
                              </div>
                        </div>

                        <div class="row">
                              <div class="col-6">
                                    <button type="button" class="btn btn-warning">Modifier</button>
                              </div>
                              <div class="col-6">
                                    <button type="button" class="btn btn-danger">Supprimer</button>
                              </div>
                        </div>

                  </div>

                  <div class="card text-center mb-5">
                        <div class="card-header">Liste des candidatures</div>
                        <div class="card-body">
                              <h5 class="card-title">1</h5>
                              <h5 class="card-title">1</h5>
                              <h5 class="card-title">1</h5>
                              <h5 class="card-title">1</h5>
                              <p class="card-text"></p>
                        </div>
                        <div class="card-footer text-muted"></div>
                  </div>
                  <div class="card text-center mb-5">
                        <div class="card-header">WishList</div>
                        <div class="card-body">
                              <h5 class="card-title">1</h5>
                              <h5 class="card-title">1</h5>
                              <h5 class="card-title">1</h5>
                              <h5 class="card-title">1</h5>
                              <p class="card-text"></p>
                        </div>
                        <div class="card-footer text-muted"></div>
                  </div>
            </div>
      </div>
      <?php
      include '../footer.php';
      ?>

      <script src="./assets/vendors/jquery/jquery-3.6.0.min.js"></script>
      <script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>