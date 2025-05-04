<?php

class usuarios
{
    // Datos de la tabla "usuario"
    const NOMBRE_TABLA = "usuario";
    const ID_USUARIO = "idUsuario";
    const NOMBRE = "nombre";
    const CONTRASENA = "contrasena";
    const CORREO = "correo";
    const CLAVE_API = "claveApi";

    public static function post($peticion)
    {
        if ($peticion[0] == 'registro') {
            return self::registrar();
        } else if ($peticion[0] == 'login') {
            return self::loguear();
        } else {
            throw new ExcepcionApi(self::ESTADO_URL_INCORRECTA, "Url mal formada", 400);
        }
    }

    private function registrar()
    {
        $cuerpo = file_get_contents('php://input');
        $usuario = json_decode($cuerpo);

        // Validar campos
        // Crear usuario
        // Imprimir respuesta
    }
   
}