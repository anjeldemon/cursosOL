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
    
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


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
  <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar por id." aria-label="Search" id="buscar">
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
            <a class="nav-link active" aria-current="page" href="../../controlador/menu.php?opcion=perfil">
              <span data-feather="home"></span>
              Perfil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../controlador/menu.php?opcion=cursos">
              <span data-feather="file"></span>
              Cursos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../controlador/menu.php?opcion=productos">
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
            <a class="nav-link" href="../../controlador/menu.php?opcion=usuarios">
              <span data-feather="users"></span>
              Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../controlador/menu.php?opcion=reportes">
              <span data-feather="bar-chart-2"></span>
              Reportes
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../../controlador/menu.php?opcion=perfil">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../controlador/menu.php?opcion=perfil">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../controlador/menu.php?opcion=perfil">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../controlador/menu.php?opcion=perfil">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../controlador/menu.php?opcion=perfil">
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
        <h1 class="h2">Usuarios</h1>
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
      
      <h2>Base de usuario.</h2>
      
      <div class="table-responsive">
        
        <form action="../../controlador/resetPass.php" method="POST">
          
        <button type="submit" class="btn btn-success">Reiniciar clave</button>
          
        <table class="table table-striped table-sm" id="tabla">
          <thead>
            <tr>
              <th scope="col">Select</th>
              <th scope="col">id</th>
              <th scope="col">Nombres</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Correo</th>
              <th scope="col">Telefono</th>
            </tr>
          </thead>
          <?php 
          require_once "../../modelo/conexion.php";
          require_once "../../modelo/funcionesAdmin.php";

          $admin = new administrador();
          $datos = $admin->tablaUsu();

          foreach ($datos as $key) {
          ?>
          <tbody>

            <tr>
            <td> <input type="checkbox" class="form-check-input" id="tablaUsu" name="tablaUsu[]" value=<?php echo $key['id'];?>></td>
              <td><?php echo $key['id'];?></td>
              <td><?php echo $key['nombres'];?></td>
              <td><?php echo $key['apellidos'];?></td>
              <td><?php echo $key['correo'];?></td>
              <td><?php echo $key['telefono'];?></td>
            </tr>
            
            
          </tbody>

          <?php } ?>
          
        </table>

      </form>

      </div>

    
    

      
    
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="../../js/dashboard.js"></script>
      <script src="../../js/busqueda.js"></script>
  </body>
</html>
