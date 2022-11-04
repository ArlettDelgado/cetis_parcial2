<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $especialidad = $_POST['especialidad'];
    $numero_control = $_POST['numero_control'];
    $curp = $_POST['curp'];
    $semestre = $_POST['semestre'];
    $turno = $_POST['turno'];







    $sql = "INSERT INTO usuarios (nombre, edad, sexo, fecha_nacimiento, especialidad, numero_control, curp, semestre, turno)". 
            "VALUE('".$nombre."', ".$edad.", ".$sexo.", '".$fecha_nacimiento."', '".$especialidad."', '".$numero_control."', '".$curp."', '".$semestre."', '".$turno."')";
    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado con éxito<a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: " . $sql. "<br>" . $conexion->error."<br><br><a href='consultarDatos.php>Regresar</a>'";
    }

    $conexion->close();

?>