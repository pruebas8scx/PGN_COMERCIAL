<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
</head>
<body>
<form action="" method="post">

<p>CODIGO DE COMPRA:</p> 
    <input type="text" class="field" name="codigo_de_compra"><br/>

    <p class="center-content">

<input type="submit" class="btn btn-green" value="CONSULTAR POR CODIGO" name="boton1"> 
<br>
<br>
 <input type="submit" class="btn btn-green" value="CONSULTA GENERAL" name="boton2">

</p>

<p class="center-content">

<a href="../../PGN_COMERCIO/articulos.html" class="btn btn-green">  VOLVER AL CATÁLOGO  </a>

</p>

</form>

<?php

if (isset ($_POST['boton1']))
{
    $codigodecompra=$_POST['codigo_de_compra'];

    $conexion=mysqli_connect ("localhost", "root", "", "kreyst") or
    die("Error en la conexion con el servidor vinax tambien fue un error");

    $sql="SELECT * FROM credito WHERE $codigodecompra=codigo_de_compra";
    
    $resultado=mysqli_query ($conexion, $sql) or die ("Error en la tabla consultar");
    while($consultado=mysqli_fetch_array($resultado))
    {
    
        echo "
        <table widht=\"100%\"border=\"1\">
        <tr>
        <td>METODO DE PAGO</td>
        <td>FECHA DE COMPRA</td>
        <td>CODIGO DE COMPRA</td>
        <td>CANTIDAD DE PRODUCTOS</td>
        <td>PRECIO TOTAL DE PRODUCTOS</td>
        <td>IMPORTE</td>
        </tr>
        <tr>
        <td>".$consultado['FECHA_DE_COMPRA']."</td>
        <td>".$consultado['CODIGO_DE_COMPRA']."</td>
        <td>".$consultado['CANTIDAD_DE_PRODUCTOS']."</td>
        <td>".$consultado['PRECIO_TOTAL_DE_PRODUCTOS']."</td>
        <td>".$consultado['IMPORTE']."</td>
        <td>".$consultado['METODO_DE_PAGO']."</td>
        </tr>
        </table>
        ";
    }
    mysqli_close($conexion);
}


if (isset ($_POST['boton2']))
{
    $codigodecompra=$_POST['codigo_de_compra'];

    $conexion=mysqli_connect ("localhost", "root", "", "kreyst") or
    die("Error en la conexion con el servidor vinax tambien fue un error");

    $sql="SELECT * FROM credito ";
    
    $resultado=mysqli_query ($conexion, $sql) or die ("Error en la tabla consultar");
    while($consultado=mysqli_fetch_array($resultado))
    {
        echo "
        <table widht=\"100%\"border=\"1\">
        <tr>
        <td>METODO DE PAGO</td>
        <td>FECHA DE COMPRA</td>
        <td>CODIGO DE COMPRA</td>
        <td>CANTIDAD DE PRODUCTOS</td>
        <td>PRECIO TOTAL DE PRODUCTOS</td>
        <td>IMPORTE</td>
        </tr>
        <tr>
        <td>".$consultado['FECHA_DE_COMPRA']."</td>
        <td>".$consultado['CODIGO_DE_COMPRA']."</td>
        <td>".$consultado['CANTIDAD_DE_PRODUCTOS']."</td>
        <td>".$consultado['PRECIO_TOTAL_DE_PRODUCTOS']."</td>
        <td>".$consultado['IMPORTE']."</td>
        <td>".$consultado['METODO_DE_PAGO']."</td>
        </tr>
        </table>
        ";
    }
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
        padding: 150px;
        background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    backdrop-filter: blur(6px) ;
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