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
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="usuSesion.php">Cursos</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../controlador/signout.php">Sign out</a>
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
        <h1 class="h2">Perfil</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#formCambioPass" >Cambio Contraseña</button>
            
          </div>
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button> -->
        </div>
      </div>

      <div class="container-fluid mt-3">
        <?php 
          require_once "../modelo/conexion.php";
          require_once "../modelo/usuario.php";
          $objeto = new ingreso();
          $datos = $objeto->datosUsuario($_SESSION['user']);

          foreach($datos as $key)
          {
        ?>

      <form id="formPerfil" action="../controlador/actualizarPerfil.php" method="POST">
        <div class="row">
          <div class="col-sm-6">
            <label for="nombres" class="col-form-label-sm">Nombres:</label>
            <input type="text" id="nombres" name="nombres" class="form-control-plaintext col-sm-6" value=<?php echo $key['nombres'];?> >
          </div>

          <div class="col-sm-6">
            <label for="apellidos" class="col-form-label-sm">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" class="form-control-plaintext col-sm-6" value=<?php echo $key['apellidos'];?> >
          </div>

          <div class="col-sm-6">
            <label for="correo" class="col-form-label-sm">E-mail:</label>
            <input type="email" id="correo" name="correo" class="form-control-plaintext col-sm-6" value=<?php echo $key['correo'];?> >
          </div>

          <div class="col-sm-6">
            <label for="telefono" class="col-form-label-sm">Telefono:</label>
            <input type="number" id="telefono" name="telefono" class="form-control-plaintext col-sm-6" value=<?php echo $key['telefono'];?> >
          </div>

          <div class="col-sm-6">
            <label for="fechaDeNacimiento" class="col-form-label-sm">Fecha de nacimiento:</label>
            <input type="date" id="fechaDeNacimiento" name="fechaDeNacimiento" class="form-control-plaintext col-sm-6" value=<?php echo $key['fechaDeNacimiento'];?> >
          </div>

          <div class="col-sm-6">
            <label for="generoid" class="col-form-label-sm">Genero:</label>
            <input type="number" id="generoid" name="generoid" class="form-control-plaintext col-sm-6" value=<?php echo $key['generoid'];?> >
          </div>

          <div style="display:none" id="btnActualizarPerfil">
          <div class="d-grid" >
              <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
          </div>
          </div>

        </div>
      </form>

        <?php } ?>
      </div>

      
    
    </main>
  </div>
</div>

<!-- modal -->
<div class="modal" id="formCambioPass">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Cambio Contraseña</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
    <form action="../controlador/cambioPass.php" method="POST">
        <div class="mb-4">
          <label for="passActual" class="form-label">Contraseña Actual:</label>
          <input type="password" class="form-control" id="passActual" placeholder="Ingrese su contraseña" name="passActual">
        </div>
        <div class="mb-4 mt-4">
          <label for="passNuevo" class="form-label">Contraseña Nueva:</label>
          <input type="password" class="form-control" id="passNuevo" placeholder="Ingrese su contraseña" name="passNuevo">
        </div>
        <div class="mb-4 mt-4">
          <label for="passNuevo2" class="form-label">Confirmar Contraseña:</label>
          <input type="password" class="form-control" id="passNuevo2" placeholder="Ingrese su contraseña" name="passNuevo2">
        </div>
        
        <div id="alerta">
        </div>

      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Cambiar</button>
    </form>
      </div>

    </div>
  </div>
</div>




      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="../js/dashboard.js"></script>
      <script src="../js/busqueda.js"></script>
  </body>
</html>
