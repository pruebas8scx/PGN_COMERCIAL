<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos de pago</title>
</head>
<body>
<form action="" method="post">



<p>¿CUAL ES SU METODO DE PAGO?</p> 
 

   

    <p class="center-content">

    <a href="credito.php" class="btn btn-green">  A CREDITO  </a>
 
    <a href="contado.php" class="btn btn-green">  DE CONTADO  </a>
</p>

<p class="center-content">

<a href="../../PGN_COMERCIO/articulos.html" class="btn btn-green">  VOLVER AL CATÁLOGO  </a>

</p>






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
        padding: 230px;
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