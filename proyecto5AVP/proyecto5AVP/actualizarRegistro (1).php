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
    <?php
    include 'conexion.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM usuarios WHERE id=" . $id;
    $resultado = $conexion->query($sql);
    $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu (1).php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Usuario</h1><hr>
                <form action="guardarRegistro.php" method="post">
                    <input name="id" type="hidden" value="<?php echo $registro["id"];?>">
                    <div class="form-group">
                    <label for="">Nombre:</label>
                        <input value="<?php echo $registro["nombre"];?>" type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Edad:</label>
                        <input value="<?php echo $registro["edad"];?>"type="number" class="form-control" name="edad" placeholder="Teclea la edad">
                    </div>
                    <div class="form-group">
                        <label for="">CURP:</label>
                        <input value="<?php echo $registro["curp"];?>"type="text" class="form-control" name="curp" placeholder="Teclea el curp">
                    </div>
                    <div class="form-group">
                        <label for="">Numero de control:</label>
                        <input value="<?php echo $registro["numero_control"];?>"type="text" class="form-control" name="numero_control" placeholder="Teclea el no. control">
                    </div>
                    <div class="form-group">
                        <label for="">Especialidad:</label>
                        <input value="<?php echo $registro["especialidad"];?>"type="text" class="form-control" name="especialidad" placeholder="Teclea el nombre">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha de nacimiento:</label>
                        <input value="<?php echo $registro["fecha_nacimiento"];?>"type="date" class="form-control" name="fecha_nacimiento">
                    </div>

                    <div class="form-group">
                        <?php
                        if ($registro["turno"]) {
                            echo "<input type='radio' name='turno' value='M' checked> Matutino <br>";
                            echo "<input type='radio' name='turno' value='V'> Vespertino <br>";
                        } else {
                            echo "<input type='radio' name='turno' value='M'> Matutino <br>";
                            echo "<input type='radio' name='turno' value='V' checked> Vespertino <br>";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                        if ($registro["turno"]==1) {
                            echo "<input type='radio' name='semestre' value='1' checked> 1ro <br>";
                            echo "<input type='radio' name='semestre' value='3'> 3ro <br>";
                            echo "<input type='radio' name='semestre' value='5'> 5to <br>";
                        } elseif($registro["turno"]==3) {
                            echo "<input type='radio' name='semestre' value='1'> 1ro <br>";
                            echo "<input type='radio' name='semestre' value='3' checked> 3ro <br>";
                            echo "<input type='radio' name='semestre' value='5'> 5to <br>";
                        } else{ 
                            echo "<input type='radio' name='semestre' value='1'> 1ro <br>";
                            echo "<input type='radio' name='semestre' value='3'> 3ro <br>";
                            echo "<input type='radio' name='semestre' value='5' checked> 5to <br>";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                        if ($registro["sexo"]) {
                            echo "<input type='radio' name='sexo' value='0' checked> Masculino <br>";
                            echo "<input type='radio' name='sexo' value='1'> Femenino <br>";
                        } else {
                            echo "<input type='radio' name='sexo' value='0'> Masculino <br>";
                            echo "<input type='radio' name='sexo' value='1' checked> Femenino <br>";
                        }
                        ?>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
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