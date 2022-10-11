<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduce tus datos</h1>
    <form action="procesador.php" method="GET">

        <label for="">Nombre: </label>
        <input type="text" name="nombre"> <br> <br>

        <label for="">Apellido: </label>
        <input type="text" name="apellido"> <br> <br>

        <label for="">RUT: </label>
        <input type="text" name="RUT"> <br> <br>

        <label for="">Correo: </label>
        <input type="text" name="correo"> <br> <br>

        <h1>Introduce tus notas</h1>

        <label for="">Nota 1: </label>
        <input type="text" name="nota1"> <br> <br>

        <label for="">Nota 2: </label>
        <input type="text" name="nota2"> <br> <br>

        <label for="">Nota 3: </label>
        <input type="text" name="nota3"> <br> <br>

        <label for="">Nota 4: </label>
        <input type="text" name="nota4"> <br> <br>

        <input type="submit" name = "submit" value = "Ingresar datos">
    </form>
</body>
</html>