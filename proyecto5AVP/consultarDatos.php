<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body style="background-color: #696969;">
<?php include 'menu (1).php'?>
    <?php
      include 'conexion.php';
      $sql = "select * from usuarios";
      $datos = $conexion->query($sql);

    ?>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Fecha de nacimiento</th>
                            <th>Turno</th>
                            <th>Semestre</th>
                            <th>Curp</th>
                            <th>Numero de control</th>




                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php if($datos->num_rows > 0) { 
                          while($row = $datos->fetch_assoc()) {
                      ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["edad"]; ?></td>
                            <td><?php echo $row["sexo"]; ?></td>
                            <td><?php echo $row["fecha_nacimiento"]; ?></td>
                            <td><?php echo $row["semestre"]; ?></td>
                            <td><?php echo $row["turno"]; ?></td>
                            <td><?php echo $row["curp"]; ?></td>
                            <td><?php echo $row["numero_control"]; ?></td>




                            <td>
                                <a href="" class="btn btn-dark">Editar</a>
                                <a href="eliminarDatos.php?id=<?php echo $row["id"]; ?>" class="btn btn-light">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>