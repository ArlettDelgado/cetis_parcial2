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
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Usuario</h1><hr>
                <form action="guardarDatos.php" method="post">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Edad:</label>
                        <input type="number" class="form-control" name="edad" placeholder="Teclea la edad">
                    </div>
                    <div class="form-group">
                        <label for="">CURP:</label>
                        <input type="text" class="form-control" name="curp" placeholder="Teclea el curp">
                    </div>
                    <div class="form-group">
                        <label for="">Numero de control:</label>
                        <input type="text" class="form-control" name="numero_control" placeholder="Teclea el no. control">
                    </div>
                    <div class="form-group">
                        <label for="">Especialidad:</label>
                        <input type="text" class="form-control" name="especialidad" placeholder="Teclea el nombre">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" name="fecha_nacimiento">
                    </div>


                    
                    <div class="form-group">
                    <label for="">Turno:</label><br>
                        <input type="radio" name="turno" value="M"> Matutino <br>
                        <input type="radio" name="turno" value="V">  Vespertino
                    </div><br>

                    <div class="form-group">
                    <label for="">Semestre:</label><br>
                        <input type="radio" name="semestre" value="1"> 1ro <br>
                        <input type="radio" name="semestre" value="3">  3ro <br>
                        <input type="radio" name="semestre" value="5">  5to <br>

                    </div><br>

                    <div class="form-group">
                    <label for="">Genero:</label><br>
                        <input type="radio" name="sexo" value="0"> Masculino <br>
                        <input type="radio" name="sexo" value="1"> Femenino
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