<?php
    include('conexion_bd.php');

    class AlumnoDAO{
        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBD();
        }

        //=====================METODOS PARA ABCC====================

        //----------------------------ALTAS-------------------------
        public function agregarAlumno($nc, $nom, $pap, $sap, $ed, $sem, $car){
            $sql = "INSERT INTO alumnos VALUES('$nc', '$nom', '$pap', '$sap', $ed, $sem, '$car')";

           if(mysqli_query($this->conexion->getConexion(), $sql)){
               //echo "PERFECTO, CASI SOY ISC :)";
               //echo "<script> alert('Agregado con EXITO'); </script>"
               header("location:../vista/formulario_altas.php");
           } else{
                //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
                echo mysqli_error($this->conexion->getConexion());
           }
        }

        //----------------------------BAJAS-------------------------
        public function eliminarAlumno($nc){
            $sql = "DELETE FROM alumnos WHERE num_control ='$nc'";

           if(mysqli_query($this->conexion->getConexion(), $sql)){
               //echo "PERFECTO, CASI SOY ISC :)";
               //echo "<script> alert('Agregado con EXITO'); </script>"
               header("location:../vista/formulario_consultas.php");
           } else{
                //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
                echo mysqli_error($this->conexion->getConexion());
           }
        }

        //----------------------------CAMBIOS-------------------------
        public function guardarCambiosAlumno($nc, $no, $pa, $sa, $ed, $se, $ca){
            $sql = "UPDATE alumnos VALUES('$nc', '$nom', '$pap', '$sap', $ed, $sem, '$car')";
            $sql = "UPDATE alumnos SET nombre='$no', primer_ap='$pa', segundo_ap='$sa', edad=$ed, semestre=$se, carrera='$ca' WHERE num_control='$nc'";
            
            if(mysqli_query($this->conexion->getConexion(), $sql)){
                //echo "PERFECTO, CASI SOY ISC :)";
                //echo "<script> alert('Agregado con EXITO'); </script>"
                header("location:../vista/formulario_consultas.php");
            } else{
                    //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
                    echo mysqli_error($this->conexion->getConexion());
            }
        }

        //----------------------------CONSULTAS-------------------------
        public function cargarAlumnos(){
            $sql = "SELECT * FROM Alumnos";

           return mysqli_query($this->conexion->getConexion(), $sql);
        }

        public function cargarAlumnosConCampo($campo, $valor){
            $sql = "SELECT * FROM Alumnos WHERE $campo = '$valor'";

           return mysqli_query($this->conexion->getConexion(), $sql);
        }
    }
?>