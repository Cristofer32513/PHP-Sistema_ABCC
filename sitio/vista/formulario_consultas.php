<?php
    session_start();

    if($_SESSION['autenticado'] == false){
        header("location:login/index.html");
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta Alumnos</title>
        <link rel="stylesheet" type="text/css" href="../estilos/estilo_consultas.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
            require_once('header.html');
        ?>

        <h4 style="background-color: blue;
                   color: white;
                   text-align: center;
                   padding: 15px;
                   margin-bottom: 15px;
                   border: 0px;">CONSULTAR ALUMNOS
        </h4>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Buscar por:</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <form class="form-inline my-2 my-lg-0" action="formulario_consultas.php" method="POST">

                    <ul class="navbar-nav mt-2 mt-lg-0 mr-3">
                        <li class="nav-item dropdown">
                            <select name="campo">
                                <option value="num_control">Numero. de control</option>
                                <option value="nombre">Nombre</option>
                                <option value="primer_ap">Primer Apellido.</option>
                                <option value="segundo_ap">Segundo Apellido.</option>
                                <option value="edad">Edad</option>
                                <option value="semestre">Semestre</option>
                                <option value="carrera">Carrera</option>
                            </select>
                        </li>
                    </ul>

                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" name="valor" id="valor" required>
                    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar" name="buscar">
                </form>
            </div>
        </nav>

        <table id="customers">
            <tr><th>Num. Control</th><th>Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Edad</th><th>Semestre</th><th>Carrera</th><th>ACCIONES</th></tr>

            <?php
                include('../scripts_php/alumno_DAO.php');
                $DAO = new alumnoDAO();

                if(isset($_POST['buscar'])) {
                    $campo = $_POST['campo'];
                    $valor = $_POST['valor'];
                    
                    $res = $DAO->cargarAlumnosConCampo($campo, $valor);
                }else{
                    $res = $DAO->cargarAlumnos();
                }

                if(mysqli_num_rows($res) > 0){
                                //mysqli_fetch_row() 
                    while($fila = mysqli_fetch_assoc($res)){
                        printf("<tr>
                                    <td>".$fila['num_control']."</td>
                                    <td>".$fila['nombre']."</td>
                                    <td>".$fila['primer_ap']."</td>
                                    <td>".$fila['segundo_ap']."</td>
                                    <td>".$fila['edad']."</td>
                                    <td>".$fila['semestre']."</td>
                                    <td>".$fila['carrera']."</td>
                                    <td>
                                        <a href='formulario_cambios.php?nc=%s&no=%s&pa=%s&sa=%s&ed=%s&se=%s&ca=%s' class='btn btn-warning' role='button'>Editar</a>
                                        <a href='../scripts_php/procesar_baja.php?nc=%s' class='btn btn-danger' role='button'>Eliminar</a>
                                    </td>
                                </tr>", $fila['num_control'], $fila['nombre'], $fila['primer_ap'], $fila['segundo_ap'], $fila['edad'], $fila['semestre'], $fila['carrera'], $fila['num_control']);
                    }
                }else{
                    echo "<script>
                            alert('No hay registros de alumnos que mostrar');  
                        </script>";
                }
            ?>
        </table>
    </body>
</html>