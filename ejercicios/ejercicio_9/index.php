<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingrese un número par </h1>
    <form action="procesador.php" method="POST">

        <label for="">Número: </label>
        <input type="text" name="numero" pattern="{0-9}">

        <input type="submit" name="submit" value="Ingrese número">

    </form>
</body>
</html>