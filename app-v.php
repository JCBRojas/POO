<?php namespace Views;
// define("URL", "localhost/POO/metodos/");

	$template = new Template();

	class Template{

		public function __construct(){
?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Administración de estudiantes | Codigo Facilito</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Administración de Estudiantes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="<?php echo URL; ?>">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Estudiantes
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo URL; ?>estudiantes">Listado</a>
          <a class="dropdown-item" href="<?php echo URL; ?>estudiantes/agregar">Agregar</a>
          
        </div>

      </li>

          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        secciones
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo URL; ?>secciones">Listado</a>
          <a class="dropdown-item" href="<?php echo URL; ?>secciones/agregar">Agregar</a>
          
        </div>

      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		        <li><a href="http://codigofacilito.com">Codigo Facilito</a></li>
		      </ul>
  </div>
</nav>

<?php
		}

		public function __destruct(){
?>
	<footer class="navbar-fixed-bottom">
		Todos los derechos reservados &copy 2015 <br>
		Carlos Fernandes ~ @_bycar | <b>CódigoFacilito</b>
	</footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	</body>
	</html>
<?php
		}

	}

?>