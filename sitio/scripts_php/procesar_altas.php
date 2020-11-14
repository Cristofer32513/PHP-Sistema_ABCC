<?php
    include('alumno_DAO.php');

    //validacion de datos

    $numc = $_POST['caja_num_control'];
    $nom = $_POST['caja_nombre'];
    $pap = $_POST['caja_primer_ap'];
    $sap = $_POST['caja_segundo_ap'];
    $eda = $_POST['caja_edad'];
    $sem = $_POST['select_semestre'];
    $car = $_POST['select_carrera'];

    $aDAO = new AlumnoDAO();
    $aDAO->agregarAlumno($numc, $nom, $pap, $sap ,$eda, $sem, $car);
?>