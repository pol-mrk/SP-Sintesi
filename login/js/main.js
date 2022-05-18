//Creamos la funcion validarLogin que comprueba que haya rellenado el formulario del login
function validarLogin() {
    //Creamos las varaibles user y pass y les damos el valor de los campos del formulario
    //user coge el valor del id= "username" que está en el formulario HTML inicio de sesión
    var user = document.getElementById('username').value;
    //pass coge el valor del id= "password" que está en el formulario HTML inicio de sesión
    var pass = document.getElementById('password').value;

    //si el campo del usuario O el campo de la contraseña del login están vacíos salta la alerta. 
    if (user == '' || pass == '') { 
        swal({
            title: "Error",
            text: "Tienes que rellenar todos los datos",
            icon: "error",
        });
        return false;
    } 
    //Si los campos están rellenos pasa por el return true y no se muestra
    else {
        return true;
    }
}