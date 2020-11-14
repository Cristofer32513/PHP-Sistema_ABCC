<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escuela</title>
    <link rel="stylesheet" type="text/css" href="../estilos/main.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </head>
  <body>
    <?php
      require_once('header.html');
    ?>

    <section class="main">
      <h2>Sistema ALtas, Bajas, Cambios y Consultas (ABCC)</h2>
      <br>
      <h4>Descripcion...</h5>
      <br>
      <p>
        <span>
          La presente pagina sirve para llevar a cabo el registro, consulta, edicion y eliminacion de datos de los estudiantes
          de una determinada escuela.
          <br><br><br>
          Se cuenta con 4 opciones principales:
          <p class="tipo">Agregar Alumno:</p><p class="desc_tipo">Nos permite Agregar un registro de un nuevo alumno.</p> 
          <p class="tipo">Eliminar Alumno:</p><p class="desc_tipo">Nos permite Eliminar el registro de un alumno existente.</p>
          <p class="tipo">Modificar Alumno:</p><p class="desc_tipo">Nos permite editar los datos de un registro de un alumno existente.</p>
          <p class="tipo">Consultar Alumno:</p><p class="desc_tipo">Nos permite buscar un registro de un alumno por su nombre.</p>

        </span>
      </p>
    </section>
    
		<footer> 
			<div>
				&copy; Derechos Reservados <b> TecJerez </b> <i> 2020 </i>
			</div>

			<div>
				Contacto: correo@correo
			</div>
		</footer>



  </body>
</html>