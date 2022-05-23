<?php
    //El ISSET mira si está RELLENADO el campo del usuario y la contraseña.
    //Si está rellenado entra aquí
    if (isset($_POST['username']) && isset($_POST['password'])) {
        //Hacemos la conexión a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "bd_camisetaspol");
        //Con el $POST_['nameformulario'] se coge los valores que han puesto en el formulario
        //El php sabe cogerlos porque en el formulario has puesto name="nombre", entonces coge
        //el valor que esté en ese name="nombre".
        //En este caso sacamos lo que ha escrito en el input de usuario y lo guardamos en una
        //variable $email
        $email=$_POST['username'];
        //En este caso sacamos lo que ha escrito en el input de contraseña y lo guardamos en una
        //variable $password
        $password=$_POST['password'];
        
        //Hacemos la query a la base de datos y le decimos que busque al usuario que tenga ese
        //nombre de usuario y esa contraseña que hemos puesto en el formulario y que hemos 
        //recogido con el $_POST y que lo hemos guardado en las variables
        //La query la guardamos dentro de una variable ($query) y la ejecutamos.
        $query = mysqli_query($conexion, "SELECT * FROM tbl_user WHERE email_user='$email' AND pass_user='$password'");

        //Cuando ejecutamos la query, hacemos un mysqli_num_rows(); 
        //si encuentra al usuario que tiene ese email será 1
        //si no lo encuentra será 0. Sea lo que sea lo guardamos dentro de la variable 
        //$existeuser, así despues podemos juagar con la variable.
        $existeuser = mysqli_num_rows($query);


        //Si el usuario EXISTE (el correo y la contraseña son las mismas que estan en la bd)
        //le dejaremos pasar y le enviaremos a la vista de las camisetas
        if($existeuser==1){
            //empezamos la sesión
            session_start();
            //en la sesión llamada iniciosesion meteremos el mail del usuario que exista.
            //hacemos la sesión para mostrarle despues el slider solo a el usuario que existe
            $_SESSION["iniciosesion"]=$email;
            header("location:../view/camisetas.php");
        //Si el usuario NO existe (el correo y la contraseña NO son las mismas que estan en la bd)
        //NO le dejaremos pasar y le enviaremos al login para que vuelva a hacerlo.
        }else{
            header("location: ../view/login.php");
        }
    //Si no esta SETEADO (RELLENADO) lo devolvemos al login para que vuelva a empezar
    }else{
        header("location: ../view/login.php");
    }