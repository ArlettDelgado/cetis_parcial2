<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body style="background-color: pink;">
    <?php
        include 'conexion.php';
        include 'menu (1).php';
    ?>
        <hr>
        <div class="container">
        <div class="row">
        <div class="col-12">
    <?php
        if ($_GET["termino"]=="") {   
    ?>
    <br>
    </div>
    <div class="alert alert-danger">No existen registros con ese término de búsqueda</div>
    <?php } else {
        $sql="SELECT * FROM usuarios WHERE nombre LIKE '%" . $_GET["termino"]."%'";
        $usuarios = $conexion->query($sql);
        if ($usuarios->num_rows==0) {
            echo "<div class='alert alert-danger'>No existe registros con ese término de búsqueda</div><br>";
        } else {
    ?>
    <table class="table table-horver">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Fecha de nacimiento</th>
            <th>Numero de Control</th>
            <th>Turno</th>
            <th>Especialidad</th>
            <th>semestre</th>
            <th>Curp</th>





        </thead>
        <tbody>
        <?php while($row = $usuarios->fetch_assoc()) { ?>
            <tr>
            <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["nombre"]; ?></td>
                <td><?php echo $row["edad"]; ?></td>
                <td><?php echo $row["sexo"]; ?></td>
                <td><?php echo $row["fecha_nacimiento"]; ?></td>
                <td><?php echo $row["numero_control"]; ?></td>
                <td><?php echo $row["turno"]; ?></td>
                <td><?php echo $row["especialidad"]; ?></td>
                <td><?php echo $row["semestre"]; ?></td>
                <td><?php echo $row["curp"]; ?></td>



                <td>
                <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-secondary">Editar</a>
                <a href="eliminarDatos.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }} ?>
        </div></div></div>

    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
