<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
</head>
<body>
<form action="modificar.php" method="post">

CODIGO: <input type="text" name="codigo"><br><br>
NOMBRE: <input type="text" name="nombre"><br><br>
COSTO: <input type="text" name="costo"><br><br>
CLASIFICACION: <input type="text" name="clasificacion"><br><br>

<input type="submit" value="MODIFICAR" name="boton1"> &nbsp

<br>
<br>
<a href="Index.html">  VOLVER A INICIO  </a>
<hr>
<br>
<br>
</form>

<?php

if (isset ($_POST['boton1']))
{
  
    $encuentra=0;
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $costo=$_POST['costo'];
    $clasificacion=$_POST['clasificacion'];


    $conexion=mysqli_connect ("localhost", "root", "", "cine") or
    die("Error en la conexion con el servidor vinax tambien fue un error");

    $sql="SELECT * FROM peliculas WHERE '$codigo'=codigo";
    
    $resultado=mysqli_query ($conexion, $sql) or die ("Error en la tabla consultar");
    while($consultado=mysqli_fetch_array($resultado))

    $encuentra=1;
    if ($encuentra== 1)
    {
        $sql="UPDATE peliculas SET codigo='$codigo', nombre='$nombre', costo='$costo', 
        clasificacion='$clasificacion' WHERE '$codigo'=codigo";
        mysqli_query($conexion,$sql);

        ECHO"REGISTRO MODIFICADO";
    }

    else

    echo "EL CODIGO NO EXISTE";
    mysqli_close($conexion);

}
?>

</body>
</html>