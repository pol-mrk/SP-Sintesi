<?php 
  //empezamos la sesión
  session_start();
  //miramos si EXISTE la sesión, SI EXISTE le creamos la web con el SLIDER y el boton de CERRAR SESIÓN
  if(isset($_SESSION["iniciosesion"])){?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Link para que las cartas funcionen!-->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/styles.css">
        <!--Link para que las cartas funcionen!-->
        <script src="../js/cartas.js"></script>
        <title>Camisetas</title>
    </head>
    <body>
      <!--Cuando le das click al boton te manda al cerrar sesion y te ciera la sesión y te la destruye!-->
      <button onclick="window.location.href='logout.proc.php'">CERRAR SESION</button>
        <div class="contenido">

        <?php
          //hacemos las conexión a la base de datos
          $conexion = mysqli_connect("localhost", "root", "", "bd_camisetaspol");
          //generamos la query que nos sacará TODA la información de la tabla camisetas         
          $query = "SELECT * FROM tbl_camisetas";
          //ejecutamos la query                  
          $resultado = $conexion->query($query);
          //mientras saca filas de la base de datos lo vamos metiendo en un array (lista) para despues mostrarlo todo       
          while($filacamiseta = $resultado->fetch_array()){
          //de cada fila que saca de la base de datos las va metiendo en la lista (ARRAY = LISTA)     
            $listaCamisetas[] = $filacamiseta;
          }
          //recorremos el array para sacar toda la información y mostrarla en las cartas.
          //por cada fila que hay en la lista de camisetas crea una carta con los datos que estan en los campos de la bd
          foreach($listaCamisetas as $camiseta){  
        ?>
            <div class="cards">
                <div class="card">
                    <div class="card__image-holder">
                        <!--Ponemos un echo para que se vea la informacion, lo que hace es
                        coge $camiseta donde está guardado y le decimos que muestre la INFO
                        que tiene guardad en el campo foto_camiseta en la bbdd!-->
                      <img class="card__image" src="<?php echo "{$camiseta['foto_camiseta']}";?>"/>
                    </div>
                    <div class="card-title">
                      <a href="#" class="toggle-info btn">
                        <span class="left"></span>
                        <span class="right"></span>
                      </a>
                      <h2>
                          <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo marca_camiseta!-->
                        <?php echo "{$camiseta['modelo_camiseta']}";?>
                        <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo talla_camiseta!-->
                        <small>Precio: <?php echo "{$camiseta['precio_camiseta']}";?></small>
                      </h2>
                    </div>
                    <div class="card-flap flap1">
                      <div class="card-description">
                        Descripcion: <?php echo "{$camiseta['descripcion_camiseta']}";?>
                        <br>
                          <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo color_camiseta!-->
                        Color: <?php echo "{$camiseta['color_camiseta']}";?>
                        <br>
                        <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo precio_camiseta!-->
                        Tallas: <?php echo "{$camiseta['talla_camiseta']}";?>
                        <button>Comprar camiseta</button>
                      </div>
                    </div>
                </div>
            </div>
        <?php
          }
        ?>
        </div>
        <h1>PONER EL SLIDER</h1>
    </body>
    </html>
  <?php
  //si NO EXISTE la sesión, creamos la web SIN el SLIDER y sin el boton de CERRAR SESIÓN
  }else{?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Link para que las cartas funcionen!-->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet" >
        <link rel="stylesheet" href="../css/styles.css">
        <!--Link para que las cartas funcionen!-->
        <script src="../js/cartas.js"></script>
        <title>Camisetas</title>
    </head>
    <body>
      <div class="row">
        <div id="header2" class="column2">
          <a href=""><img src="../../img/carrito.png" alt="" class="img2"></a>
        </div>
      </div>
        <div class="contenido">
        <?php
          $conexion = mysqli_connect("localhost", "root", "", "bd_camisetaspol");
          $query = "SELECT * FROM tbl_camisetas";
          $resultado = $conexion->query($query);

          while($fila = $resultado->fetch_array()){
            $listaCamisetas[] = $fila;
          }
          foreach($listaCamisetas as $camiseta){  
        ?>
            <div class="cards">
                <div class="card">
                    <div class="card__image-holder">
                      <img class="card__image" src="<?php echo "{$camiseta['foto_camiseta']}";?>"/>
                    </div>
                    <div class="card-title">
                      <a href="#" class="toggle-info btn">
                        <span class="left"></span>
                        <span class="right"></span>
                      </a>
                      <h2>
                          <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo marca_camiseta!-->
                        <?php echo "{$camiseta['modelo_camiseta']}";?>
                        <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo talla_camiseta!-->
                        <small>Precio: <?php echo "{$camiseta['precio_camiseta']}";?></small>
                      </h2>
                    </div>
                    <div class="card-flap flap1">
                      <div class="card-description">
                        Descripcion: <?php echo "{$camiseta['descripcion_camiseta']}";?>
                        <br>
                          <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo color_camiseta!-->
                        Color: <?php echo "{$camiseta['color_camiseta']}";?>
                        <br>
                        <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo precio_camiseta!-->
                        Tallas: <?php echo "{$camiseta['talla_camiseta']}";?>
                        <button>Comprar camiseta</button>
                      </div>
                      
                    </div>
                </div>
            </div>
        <?php
          }
        ?>
        </div>
    </body>
    </html>
  <?php
  }
  ?>