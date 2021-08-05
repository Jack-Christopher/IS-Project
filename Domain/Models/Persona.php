<?php

class Persona
{
    public  $id;
    public  $nombres;
    public  $apellidos;
    public  $correoElectronico;
    public  $telefono;
    public  $permisos;
    

    public function __construct($result_array, $permiso)
    {
        $this->id = $result_array["id"];
        $this->nombres = $result_array["nombres"];
        $this->apellidos = $result_array["apellidos"];
        $this->correoElectronico = $result_array["correo_electronico"];
        $this->telefono = $result_array["telefono"];
        $this->permisos = $permiso;
    }

}
