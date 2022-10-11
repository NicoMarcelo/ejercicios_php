<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcula tu promedio</h1>
    <form action="procesador3.php" method="GET">
        <label for="">Nota 1</label>
        <input type="text" name="nota1" placeholder = "7.0"> <br><br>

        <label for="">Ponderación nota 1 %</label>
        <input type="text" name="ponderacion1" placeholder="10"> <br><br>

        <label for="">Nota 2</label>
        <input type="text" name="nota2" placeholder = "7.0"> <br><br>

        <label for="">Ponderación nota 2 %</label>
        <input type="text" name="ponderacion2" placeholder="20"> <br><br>

        <label for="">Nota 3</label>
        <input type="text" name="nota3" placeholder = "7.0"> <br><br>

        <label for="">Ponderación nota 3 %</label>
        <input type="text" name="ponderacion3" placeholder="30"> <br><br>

        <label for="">Nota 4</label>
        <input type="text" name="nota4" placeholder = "7.0"> <br><br>

        <label for="">Ponderación nota 4 %</label>
        <input type="text" name="ponderacion4" placeholder="40"> <br><br>


        <input type="submit" value="Calcule" name="submit">
    </form>
</body>
</html>