<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- local css -->
    <link rel="stylesheet" href="css/estilo.css">
    
    <title>Document</title>
</head>
<body>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="container p-5 my-5 bg-black text-white rounded">
                <h1>Icono</h1>
                <p>espacionpara icono o eslogan</p>
                <img src="">
            </div>
        </div>
        <div class="col-sm-6">
            <div id="cajaFormulario" class="container p-5 my-5 bg-black text-white rounded">
                
                <h1>Bienvenido</h1>

                <form action="controlador/login.php" method="POST">
                    <div class="mb-4 mt-4">
                        <label for="idIngreso" class="form-label">Usuario:</label>
                        <input type="number" class="form-control" id="idIngreso" placeholder="Ingrese su ID" name="idIngreso">
                    </div>

                    <div class="mb-4 mt-4">
                        <label for="pass" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="pass" placeholder="Ingrese su contraseña" name="pass">
                    </div>

                      <button type="submit" class="btn btn-light">Iniciar</button>
                </form>
                    <!-- Boto modal -->
                        <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#registro">
                            Registrate
                        </button>
            </div>
        </div>
    </div>
    <div class="p-5 bg-primary text-white">
        <h1>Footer</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor corrupti voluptas beatae error porro at dignissimos! Assumenda eius aspernatur ut totam amet. Voluptas perferendis provident nesciunt iure ab cumque?</p>
    </div>


                    <!-- Modal -->
                    <div class="modal" id="registro">
                        <div class="modal-dialog">
                            <div class="modal-content">
  
                            <!-- titulo -->
                            <div class="modal-header">
                                <h4 class="modal-title">Compartenos tus datos.</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
  
                            <!-- info -->
                            <div class="modal-body">
                                <form action="controlador/registroNuevoUsuario.php" method="POST">
                                    <label for="idRegistro" class="col-form-label-sm">Número de identificación:</label>
                                    <input type="number" class="form-control" id="idRegistro" placeholder="Ingrese su número de id" name="idRegistro">

                                    <label for="nombres" class="col-form-label-sm">Nombres:</label>
                                    <input type="text" class="form-control" id="nombres" placeholder="ingrese sus nombres" name="nombres">

                                    <label for="apellidos" class="col-form-label-sm">Apellidos:</label>
                                    <input type="text" class="form-control" id="apellidos" placeholder="ingrese sus apellidos" name="apellidos">

                                    <label for="correo" class="col-form-label-sm">e-mail:</label>
                                    <input type="email" class="form-control" id="correo" placeholder="ingrese su correo" name="correo">

                                    <label for="telefono" class="col-form-label-sm">Celular:</label>
                                    <input type="text" class="form-control" id="telefono" placeholder="ingrese su numero celular" name="telefono">
                                    
                                    <label for="fechaNacimiento" class="col-form-label-sm">Fecha de nacimiento:</label>
                                    <input type="date" class="form-control" id="fechaNacimiento" placeholder="ingrese su fecha de nacimiento" name="fechaNacimiento">

                                    <label for="genero" class="col-form-label-sm">Genero</label>
                                    <select id="genero" name="genero" class="form-select form-select-sm">
                                        <option value="1">1</option>

                                    </select>
                                    
                                
                            </div>
  
                            <!-- acciones -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Registrarse</button>
                                </form>
                            </div>
  
                            </div>
                        </div>
                    </div>


</body>
</html>