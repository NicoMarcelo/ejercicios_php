<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduzca sus datos</h1>
    <form action="procesador.php" method="GET">
        <label for="">Nombre: </label> <br>
        <input type="text" name="nombre" placeholder="Juán"> <br> <br>

        <label for="">Apellido: </label> <br>
        <input type="text" name="apellido" placeholder="Pérez"> <br> <br>

        <label for="">RUT: </label> <br>
        <input type="text" name="rut" placeholder="1.111.111-1"> <br> <br>

        <label for="">Correo: </label> <br>
        <input type="text" name="correo" placeholder="ejemplo@gmail.com"> <br> <br>

        <input type="submit" value="Ingresar datos" name="submit">
    </form>
</body>
</html>