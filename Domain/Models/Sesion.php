<?php

class Sesion
{
    public $id;
    public  $hora;
    public  $fecha;
    public  $InformacionExtra;
    public  $Evento;


    public function __construct($result_array)
    {
        $this->id = $result_array["id"];
        $this->fecha = $result_array["fecha"];
        $this->hora = $result_array["hora"];
        $this->Evento = $result_array["informacionExtra"];
    }

    public function get_values()
    {
        $values = [
            "id" => "$this->id",
            "fecha" => "$this->fecha",
            "hora" => "$this->hora",
            "informacionExtra" => "$this->Evento",
        ];
        return $values;
    }

}
