<!DOCTYPE html>
<html lang="en">
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
      <h1 class="text-center">BIENVENIDO A UMECIS TU LIBRERIA DIGITAL</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">¿Qué es UMECIS?</h3>
          </div>
          <div class="panel-body">
          <p class="text-justify">UMECIS es una biblioteca virtual que facilita la búsqueda y administración de libros
          o documentos en formato electrónico, que serán de uso exclusivo de los estudiantes y docentes, ya que será
        una plataforma que proveerá contenido educativo a nivel universitario.
           </p>
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
                <label>Nombre de usuario</label>
                <input type="text" class="form-control" name="Nombre">
              </div>
              <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" name="clave1">
              </div>
              <br>
              <div class="row">
                <div class="col-md-3">
                  <div class="panel panel-default text-center">
                  <a href="#">Inicio de sesión</a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="panel panel-default">
                      <div class=" text-center">
                        <a href="/codeigniter/public/Registro">Registrarse</a>
                      </div>
                    </div>
                  </div>
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
