<?php

interface IStatictics
{
    public function __construct($result_array);
    public function get_values();
}


class Statictics implements IStatictics
{

    public  $nombre_archivo;
    public  $cantidad_descargas;
    public  $invitado_nombres;
    public  $invitado_apellidos;
    public  $organizador_apellidos;
    public  $session_id;
    public  $session_date;
    public  $usuario_apellidos;

    public function __construct($result_array)
    {
        $this->nombre_archivo = $result_array["nombre_archivo"];
        $this->cantidad_descargas = $result_array["cantidad_descargas"];
        $this->invitado_nombres = $result_array["nombre_invitados"];
        $this->invitado_apellidos = $result_array["apellidos_invitados"];
        $this->organizador_apellidos = $result_array["organizador_apellidos"];
        $this->sesion_id = $result_array["sesion_id"];
        $this->sesion_fecha = $result_array["sesion_fecha"];
        $this->usuario_apellidos = $result_array["usuario_apellidos"];
    }

    public function get_values()
    {
        $values = [
            "nombre_archivo" => "$this->nombre_archivo",
            "cantidad_descargas" => "$this->cantidad_descargas",
            "invitado_nombres" => "$this->invitado_nombres",
            "invitado_apellidos" => "$this->invitado_apellidos",
            "organizador_apellidos" => "$this->organizador_apellidos",
            "sesion_id" => "$this->sesion_id",
            "sesion_fecha" => "$this->sesion_fecha",
            "usuario_apellidos" => "$this->usuario_apellidos"
        ];
        return $values;
    }
    
}

