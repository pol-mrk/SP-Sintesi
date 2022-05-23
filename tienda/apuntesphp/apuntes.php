<?php

//////////////////APUNTES PHP/////////////////////
//1. PHP necesita ser compilado, por eso, TODOS los proyectos que tengan php deben ir dentro del XAMPP.
//2. Para empezar a hacer codigo PHP tienes que abrir con la etiqueta <?php al principio de todo.
//3. Se debe cerrar con ; todas las lineas de codigo.
//4. Para crear una variable se pone un $ al principio ($nombrevariable).
//5. Todo lo que va entre comillas ("",'') será texto. Lo que no vaya con comillas será numero.
//6. Para mostrar por pantalla cualquier cosa se utiliza el echo (echo "hola" / echo $david).
//7. PHP haces calculos y coges datos de base de datos y HTML creas la estructura de la pagina web.
//8. en el PHP puedes utilizar HTML hasta que abres PHP (<?php) y hasta que la cierras y puedes escribir HTML otra vez.
//9. Puedes mostrar etiquetas HTML desde PHP con echo (echo "<br>").
//10. Debes alternar entre ("" y '') para que no se te joda el codigo.
//11. Para redireccionar al usuario al PHP podemos redireccionarle con un action="carpeta/archivo.proc.php" en un formulario.
//12. ISSET (isset()) te mira si el campo está rellenado (seteado).
//13. $_POST['name en html'] te coge los valores que has rellenado en el campo del formulario.
//14. || = y / $$= O

//////////////////APUNTES BASES DE DATOS/////////////////////
//1. El primer campo SIEMPRE va a ser un id autoincremental (A_I) se suma de 1 en uno automaticamente cada vez que se crea un registro.
//1.1 nombre: id, tipo: INT, Longitud: 10, A_I : Check (autoincremental y primary key ya que es UNICO).
//2. TIPOS DE DATOS SQL:
//2.1 Int (10) (INTEGER) numero entero (10.000).
//2.2 VARCHAR (numero máximo de letras) (VARCHAR (250)) solo caben 250 letras.
//2.3 TEXT (numero maximo de letras) caben 65.000 letras, funciona igual que el varchar.
//2.5 DATE donde se guardan las fechas.
//2.6 ENUM es un desplegable de opciones (un select).
//3. En cada nombre de columna se añade al final _nombretabla (nombre_user -> tbl_user).
//4. Para insertar datos en la tabla tienes que ir a la opcion de arriba que pone INSERTAR.
//5. En la base de datos podemos guardar como VARCHAR las rutas de las imagenes que tenemos en nuestro proyecto. (../img/nike1.jpg).
//6. Pudes importar la base de datos (bd_camisetas.sql) yendo al PHPMyAdmin y le das a la opción de IMPORTAR.


/////////////////////////////ESTRUCTURA DE CARPETAS//////////////////////////////////
//1. Creas carpeta css y metes todos los .css dentro.
//2. Creas carpeta db y metes el SQL EXPORTADO de la base de datos FINAL.
//3. Creas carpeta img y metes todos las imagenes dentro.
//4. Creas carpeta js y metes todos los .js dentro.
//5. Creas carpeta process y metes todos los archivos que hagan PROCESOS xxxx.proc.php 
//6. Creas carpeta view y metes todas las WEBS que SE VEN POR PANTALLA.

