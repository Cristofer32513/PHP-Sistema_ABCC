<?php
    include('alumno_DAO.php');

    //validacion de datos

    $nc = $_POST['caja_num_control'];
    $no = $_POST['caja_nombre'];
    $pa = $_POST['caja_primer_ap'];
    $sa = $_POST['caja_segundo_ap'];
    $ed = $_POST['caja_edad'];
    $se = $_POST['select_semestre'];
    $ca = $_POST['select_carrera'];

    $aDAO = new AlumnoDAO();
    $aDAO->guardarCambiosAlumno($nc, $no, $pa, $sa ,$ed, $se, $ca);
?>