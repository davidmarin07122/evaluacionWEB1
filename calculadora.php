<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <header>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Super</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="pagin1.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>


        
          
    </header>
    <main>

        <div class="container">
            <div class="row justify-content-center">
               <div class="col-4">


                <form class="mt-5" action="pagina1.php" method="POST">
                    <h4>CALCULO DE LA COMPRA</h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="n1" name="numero1">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="n2" name="numero2">
                            </div>
                        </div>

                        <div>
                        
                        
                        </div>
                        <button type="submit" class="btn btn-primary mt-5" name="botonCalcular">Calcular</button>
                </form>

                <?php 
                
                    if(isset($_POST["botonCalcular"])){

                       $precioProducto1=$_POST["precio1"];
                       $nombreProducto1=$_POST["producto1"];

                       $costoEnvio=8000;

                       $total=$precioProducto1+$costoEnvio;

                       echo("El total de la compra es de: ".$total);
                    }
                
                ?>


                       //* OBCION B
                <?php if(isset($_POST["botonCalcular"])): ?>

                <h4>


                <?php
                
                if(isset($_POST["botonCalcular"])){

                    $precioProducto1=$_POST["precio1"];
                    $nombreProducto1=$_POST["producto1"];

                    $costoEnvio=8000;

                    $total=$precioProducto1+$costoEnvio;

                    echo("El total de la compra es de: ".$total);


                 }
                 
                 ?>
                </h4>

                <?php endif ?>//


               </div> 
            </div>
        
        </div>
     

    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>