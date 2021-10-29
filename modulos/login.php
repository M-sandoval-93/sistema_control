<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <title>Inventario Online</title>
</head>
<body>

    <div class="content">
        <h3 class="text_center">Inicio de Sesión</h3>
        <form id="form__login">
            <div class="form__input-grup">
                <input class="form__input-control" type="text" id="input_usuario" name="usuario" aria-autocomplete="off">
                <span></span>
                <label>Nombre usuario</label>
            </div>

            <div class="form__input-grup">
                <input class="form__input-control" type="password" id="input_clave" name="clave" aria-autocomplete="off">
                <span></span>
                <label>Contraseña</label>
            </div>
            
            <button class="form__button" id="button_ingreso">Ingresar</button>

            <div class="form__link">
                <a id="btn_link">Cambiar contraseña</a>
            </div>
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="ajax/login.js"></script>
</body>
</html>
