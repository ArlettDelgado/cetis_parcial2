<?php
    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $especialidad = $_POST['especialidad'];
    $numero_control = $_POST['numero_control'];
    $curp = $_POST['curp'];
    $semestre = $_POST['semestre'];
    $turno = $_POST['turno'];
    $sql = "UPDATE usuarios SET nombre='".$nombre."', edad='".$edad."', sexo='".$sexo."',
    fecha_nacimiento='".$fecha_nacimiento."', especialidad='".$especialidad."', numero_control='".$numero_control."', curp='".$curp."', semestre='".$semestre."', turno='".$turno."'"."WHERE id=".$id;

    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado con éxito<a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Erro: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }
?>