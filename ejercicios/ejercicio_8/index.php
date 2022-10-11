<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingresa tus datos</h1>
    <form action="procesador.php" method="POST">

        <label for="">Nombre: </label> <br>
        <input type="text" name="nombre" maxlength="15" pattern="[A-Za-záéíóúÁÉÍÓÚ]{3,15}"> <br><br>

        <label for="">Correo: </label> <br>
        <input type="text" name="correo"> <br><br>

        <label for="">Contraseña: </label> <br>
        <input type="password" name="contraseña" maxlength="30" pattern="[A-Za-z0-9$@.-]{5,30}"> <br><br>

        <input type="submit" name="submit" value="Ingresar datos">

    </form>
</body>
</html>