<?php
    include('conexion_bd_usuarios.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();
    //var_dump($conexion);

    if($conexion){
        $u = $_POST['caja_usuario'];
        $p = $_POST['caja_password'];

        $u_cifrado = sha1($u);
        $p_cifrado = sha1($p);

        $sql = "SELECT * FROM usuarios WHERE usuario = '$u_cifrado' AND password = '$p_cifrado'";
        $res = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($res) == 1){
            //echo "usuario autenticado";
            session_start();
            $_SESSION['autenticado'] = true;
            $_SESSION['usuario'] = $u;
            header("location:../vista/formulario_consultas.php");
        }else{
            //echo "usuario no encontrado";
            header("location:../vista/login/index.html");
        }
    }

    
?>