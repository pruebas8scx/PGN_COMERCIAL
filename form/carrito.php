<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
<form action="" method="post">



<p>CODIGO:</p> 
    <input type="text" class="field" name="codigo"><br/>

    <p>PRODUCTO:</p> 
    <input type="text" class="field" name="producto"><br/>

    <p>PRECIO:</p> 
    <input type="text" class="field" name="precio"><br/>

   

    <p class="center-content">

    <input type="submit" class="btn btn-green" value="AGREGAR" name="boton1"> 
    <br>
    <br>
     <input type="submit" class="btn btn-green" value="ELIMINAR" name="boton2">

</p>

<p class="center-content">

<a href="../../PGN_COMERCIO/articulos.html" class="btn btn-green">  VOLVER AL CATÁLOGO  </a>

</p>


    
</form>

<?php
if (isset ($_POST['boton1']))
{
    $codigo=$_POST['codigo'];
    $producto=$_POST['producto'];
    $precio=$_POST['precio'];
  


    $conexion=mysqli_connect ("localhost", "root", "", "kreyst") or
    die("Error en la conexion con el servidor vinax tambien fue un error");

    $sql= "INSERT INTO carrito VALUES ('$codigo', '$producto', '$precio')";

    $resultado=mysqli_query ($conexion, $sql) or die ("Error en la  registrar");

    mysqli_close($conexion);

    echo '<script language="javascript">alert("Producto agregado al carrito");</script>';



}


if (isset ($_POST['boton2']))
{
  
    $encuentra=0;
    $codigo=$_POST['codigo'];

    $conexion=mysqli_connect ("localhost", "root", "", "kreyst") or
    die("Error en la conexion con el servidor vinax tambien fue un error");

    $sql="SELECT * FROM carrito WHERE '$codigo'=codigo";
    
    $resultado=mysqli_query ($conexion, $sql) or die ("Error en la tabla consultar");
    while($consultado=mysqli_fetch_array($resultado))
    echo "<center>";
    $encuentra=1;
  
    if ($encuentra== 1)
    {
        $sql="DELETE FROM carrito WHERE '$codigo'=codigo"; 
        mysqli_query($conexion,$sql);
       
        echo '<script language="javascript">alert("REGISTRO ELIMINADO, DALE CLICK EN ACEPTAR PARA CERRAR ESTA ALERTA");</script>';

       
    }
  

    else {
        echo '<script language="javascript">alert("EL CODIGO NO EXISTE, DALE CLICK EN ACEPTAR PARA CERRAR ESTA ALERTA ");</script>';

        mysqli_close($conexion);
    }
    
}
echo "</center>";

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
        padding: 73px;
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