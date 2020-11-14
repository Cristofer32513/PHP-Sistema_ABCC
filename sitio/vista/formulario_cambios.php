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
        <title>Editar Alumno</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
            require_once('header.html');
        ?>

        <h4 style="background-color: #FA9515;
                   color: white;
                   text-align: center;
                   padding: 15px;
                   margin-bottom: 15px;
                   border: 0px;">EDITAR ALUMNO
        </h4>
                   
        <form method="POST" action="../scripts_php/procesar_cambios.php" style="width: 80%; padding-left: 10%;">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Numero de control</label>
                    <input type="text" class="form-control" id="numeroDeControl" name="caja_num_control" readonly required minlength=9 maxlength=9 value="<?php echo $_GET['nc']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="caja_nombre" required minlength=0 maxlength=45 value="<?php echo $_GET['no']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress">Primer Apellido</label>
                <input type="text" class="form-control" id="primerApellido" name="caja_primer_ap" required minlength=0 maxlength=45 value="<?php echo $_GET['pa']; ?>">
            </div>

            <div class="form-group">
                <label for="inputAddress2">Segundo Apellido</label>
                <input type="text" class="form-control" id="segundoApellido" name="caja_segundo_ap" required minlength="0" maxlength="45" value="<?php echo $_GET['sa']; ?>">
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Edad</label>
                    <input type="number" class="form-control" id="inputCity" name="caja_edad" required min="18" max="23" value="<?php echo $_GET['ed']; ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputState">Semestre</label>
                    <select id="inputState" class="form-control" name="select_semestre" required]>
                        <option><?php echo $_GET['se']; ?></option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="inputZip">Carrera</label>
                    <select id="inputCarrera" class="form-control" name="select_carrera" required>
                        <option><?php echo $_GET['ca']; ?></option>
                        <option>Contador Publico</option>
                        <option>Industrias Alimentarias</option>
                        <option>Ingenieria Mecatronica</option>
                        <option>Ingenieria en Sistemas Computacionales</option>
                        <option>Licenciatura en Administracion</option>                        
                    </select>
                </div>
            </div>
           
            <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
        </form>
    </body>
</html>