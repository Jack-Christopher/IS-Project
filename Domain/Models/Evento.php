<?php

class Evento
{

    public  $idEvento;
    public  $nombre;
    public  $descripcion;
    public  $pais;

    public function __construct($result_array)
    {
        $this->idEvento = $result_array["id"];
        $this->nombre = $result_array["nombre"];
        $this->descripcion = $result_array["descripcion"];
        $this->pais = $result_array["pais"];
    }

    public function get_values()
    {
        $values = [
            "id" => "$this->idEvento",
            "nombre" => "$this->nombre",
            "descripcion" => "$this->descripcion",
            "pais" => "$this->pais",
        ];
        return $values;
    }

}

