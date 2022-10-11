<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingrese sus datos: </h1>
    <form action="procesador.php" method="GET">

        <label for="">Nombre: </label>
        <input type="text" name="nombre" placeholder="Juán"> <br><br>

        <label for="">Apellido: </label>
        <input type="text" name="apellido" placeholder="Pérez"> <br><br>

        <label for="">RUT: </label>
        <input type="text" name="rut" placeholder="1.111.111-1"> <br><br>

        <label for="">Correo: </label>
        <input type="text" name="correo" placeholder="ejemplo@gmail.com"> <br><br>

        <h2>Ingrese su carrera: </h2>
        <select name="carrera">
            <option value="ninguno">Ninguno</option>
            <option value="geologia">TNS Geología</option>
            <option value="minas">TNS en Minas</option>
            <option value="metales">TNS en Metales</option>
            <option value="informatica" >TNS en Informática</option>
        </select> <br> <br>
        
        <input type="submit" name="submit" value="Ingresar datos">

    </form>
</body>
</html>