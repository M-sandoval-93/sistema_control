const expresion = /^[a-zA-ZÁ-ÿ-0-9\s._ ]+$/;

$('#button_ingreso').click(function (e) {
    e.preventDefault();
    let usuario = $.trim($('#input_usuario').val());
    let clave = $.trim($('#input_clave').val());

    validar(usuario, clave);

});

const validar = function (usser, pass){
    if (usser.length <= 0 && pass.length <=0){
        Swal.fire({
            icon: 'warning',
            showConfirmButton: false,
            timer: 1500,
            title: "El nombre de usuario y contraseña son requeridos !!"
       }); 

    } else if (usser.length > 0 && pass.length <= 0){
        Swal.fire({
            icon: 'warning',
            showConfirmButton: false,
            timer: 1500,
            title: 'Ingresar contraseña !!'
        });

    } else if (usser.length <= 0 && pass.length > 0){
        Swal.fire({
            icon: 'warning',
            showConfirmButton: false,
            timer: 1500,
            title: 'Ingresar usuario !!'
        });

    } else if (!expresion.test(usser) || !expresion.test(pass)){
        Swal.fire({
            icon: 'error',
            title: 'Los campos no pueden contener caracteres especiales !!',
            allowOutsideClick: false
        });
    } else{
        Swal.fire({
            icon: 'success',
            showConfirmButton: false,
            timer: 1500,
            title: 'Acceso permitido !!'
        });
    }
}
