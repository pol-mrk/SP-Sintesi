<?php
//empezamos la sesion
session_start();
//destruimos la sesión para que pueda entrar con otro usuario o que entre sin usuario
session_destroy();
//la enviamos al login
header('Location: ../view/login.php')
?>
