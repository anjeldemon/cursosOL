<?php 
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Dashboard</title>


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="usuSesion.php">Cursos</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../../controlador/signout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../controlador/menu.php?opcion=perfil">
              <span data-feather="home"></span>
              Perfil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controlador/menu.php?opcion=cursos">
              <span data-feather="file"></span>
              Cursos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controlador/menu.php?opcion=productos">
              <span data-feather="shopping-cart"></span>
              Productos
            </a>
          </li>
        </ul>

        <div id="funcionesAdmin">

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrador</span>
          <!-- <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a> -->
        </h6>
        
        <ul class="nav flex-column mb-2">

          <li class="nav-item">
            <a class="nav-link" href="../controlador/menu.php?opcion=usuarios">
              <span data-feather="users"></span>
              Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controlador/menu.php?opcion=reportes">
              <span data-feather="bar-chart-2"></span>
              Reportes
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../controlador/menu.php?opcion=perfil">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controlador/menu.php?opcion=perfil">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controlador/menu.php?opcion=perfil">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controlador/menu.php?opcion=perfil">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controlador/menu.php?opcion=perfil">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>

        </div>

      </div>
    </nav>
    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Productos</h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div> -->
      </div>

      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Gratis</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>ventajas</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary" disabled>Gratis</button>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$1<small class="text-muted fw-light">/6 meses</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>ventajas</li>
            </ul>
              <a href="../../controlador/seleccionPlan.php?user=<?php echo $_SESSION['user']?>&plan=180">
                <button type="button" class="w-100 btn btn-lg btn-primary">Suscribete</button>
              </a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$2<small class="text-muted fw-light">/12 meses</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>ventajas</li>
            </ul>
              <a href="../../controlador/seleccionPlan.php?user=<?php echo $_SESSION['user']?>&plan=365">
                <button type="button" class="w-100 btn btn-lg btn-primary">Suscribete</button>
              </a>
          </div>
        </div>
      </div>
    </div>

    
    

      
    
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="../../js/dashboard.js"></script>
  </body>
</html>
