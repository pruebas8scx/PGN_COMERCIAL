<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">

CODIGO: <input type="text" name="codigo"><br><br>

<input type="submit" value="ELIMINAR" name="boton1">  &nbsp
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

    $conexion=mysqli_connect ("localhost", "root", "", "cine") or
    die("Error en la conexion con el servidor vinax tambien fue un error");

    $sql="SELECT * FROM peliculas WHERE '$codigo'=codigo";
    
    $resultado=mysqli_query ($conexion, $sql) or die ("Error en la tabla consultar");
    while($consultado=mysqli_fetch_array($resultado))

    $encuentra=1;

    if ($encuentra== 1)
    {
        $sql="DELETE FROM peliculas WHERE '$codigo'=codigo"; 
        mysqli_query($conexion,$sql);
        echo "REGISTRO ELIMINADO";
    }

    else {
        echo "EL CODIGO NO EXISTE";
        mysqli_close($conexion);
    }
}