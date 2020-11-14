<?php
    include('alumno_DAO.php');

    $nc = $_GET['nc'];
    $aDAO = new AlumnoDAO();
    $aDAO->eliminarAlumno($nc);
?>