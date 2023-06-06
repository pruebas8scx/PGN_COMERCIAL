<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrarse</title>
</head>
<body>
<form action="" method="post">

    <p>CODIGO POSTAL:</p> 
    <input type="text" class="field" name="codigo_postal"><br/>

    <p>NOMBRE:</p>
     <input type="text" class="field" name="nombre"><br/>

    <p>CORREO ELECTRÓNICO:</p>
    <input type="text" class="field" name="correo_electronico"><br/>

    <p>NUMERO DE TELÉFONO: </p>
    <input type="text" class="field" name="numero_de_telefono"><br/>

    <p>DESCRIPCIÓN</p>
    <textarea class="field" name="descripcion"></textarea><br/>

    <p class="center-content">

    <input type="submit" class="btn btn-green" value="REGISTRARSE" name="boton1">

</p>

<p class="center-content">

<a href="../../PGN_COMERCIO/articulos.html" class="btn btn-green">  VOLVER AL CATÁLOGO  </a>

</p>

    
</form>

<?php
if (isset ($_POST['boton1']))
{
    $codigopostal=$_POST['codigo_postal'];
    $nombre=$_POST['nombre'];
    $correoelectronico=$_POST['correo_electronico'];
    $numerodetelefono=$_POST['numero_de_telefono'];
    $descripcion=$_POST['descripcion'];

   
    
    
    $conexion=mysqli_connect ("localhost", "root", "", "kreyst") or
    die("Error en la conexion con el servidor vinax tambien fue un error");

    $sql= "INSERT INTO registros VALUES ('$codigopostal', '$nombre', '$correoelectronico', '$numerodetelefono','$descripcion')";

    $resultado=mysqli_query ($conexion, $sql) or die ("Error en la  registrar");

    mysqli_close($conexion);


}

?>

<style>

    .btn{
        border-radius:3px;
        display: inline-block;
        padding: 20px 15px;
        text-decoration: none;
        text-shadow: 0 1px 0 rgba(255,255,255,0.3);
        box-shadow: 0 1px 1px rgba(0,0,0,0.3);
        cursor: pointer;
        border-radius: 5px
    }

    .btn-green{
        color: white;
        background-color: black;
        
    }

    .btn-green:hover{
        background-color: #777777;
    }

    .btn-green:active{
        background-color:  #777777;
    }





    body{
        font-family: Arial;
        background-image: url(../img/br.jpg);
        box-sizing: border-box;
        padding: 43px;
        background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    backdrop-filter: blur(1px) ;
    margin: auto;

    }

  


    form{
        background-color: #fff;
        margin: 0 auto;
        width: 400px;
        padding: 10px;
        border-radius: 15px
        

    }

    input, textarea{
        outline: none;
        border: 0;
        width: 370px;
    }

    .field{
        border: solid 1px #ccc;
        padding: 10px;
        border-radius: 10px
    }

    .field:focus{
        border-color: black;
        
    }

    .center-content{
        text-align: center;
    }

    p{

        font-size: 0.8em;

    }
    
</style>

</body>
</html>