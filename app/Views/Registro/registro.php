<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>UMECIS</title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/estilos/bootstrap.min.css" >
    <link rel="stylesheet" href="Bootstrap/css/estilos.css">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1 class="text-center">Formulario de registro.</h1>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Instrucciones</h3>
            </div>
            <div class="panel-body">
            <p class="text-justify">Para unirte a la página de UMECIS en caso de ser estudiante debes ingresar CÓDIGO de Carrera-Cédula.
               Su contraseña debe tener letras minúsculas, mayúsculas, números y símbolos.
             </p>

                 <p class="text-justify">Para los docentes deben ingresar con el codigo Prof-Apellido.
               Su contraseña debe tener letras minúsculas, mayúsculas, números y símbolos.
             </p>
             <br>
             <a href="/codeigniter/public">¿Ya tienes cuenta?</a>
           </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Introduce tus datos</h3>
            </div>
            <div class="panel-body">
              <form class="form" method="post">
                <div class="form-group">
                  <label>Código de carrera</label>
                  <input type="text" class="form-control" name="Nombre" placeholder="Introduzca su código de carrera">
                </div>
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="email" class="form-control" name="email" placeholder="Introduzca su nombre">
                </div>
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="email" class="form-control" name="email" placeholder="Introduzca su apellido">
                  </div>
                  <div class="form-group">
                  <label>Contraseña</label>
                  <input type="password" class="form-control" name="clave1">
                </div>
                <br>
                <div class="text-center">
                <button type="submit" class="btn btn-default" name="enviar">Registrarse</button>
                </div>
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

<script src="Bootstrap/js2/bootstrap.min.js"></script>
  </body>
</html>
