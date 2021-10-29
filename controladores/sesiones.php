<?php
    class sesionUsuario{
        public function __construct(){
            session_start();
        }

        public function obtenerUsuario(){
            return $_SESSION['usuario']['nombre'];
        }

        public function obtenerRol(){
            return $_SESSION['usuario']['rol'];
        }

        public function obtenerId(){
            return $_SESSION['usuario']['id'];
        }

        public function comprobarUsuario($usuario, $clave){
            include_once "controladores/conexion.php";

            $md5clave = md5($clave);
            // variables usadas para la bitacora de acceso
            // $inicio = date("Y-m-d H:i:s");
            // $cierre = "0000-00-00 00:00:00";
        }
    }

?>
