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

    public function print()
    {
        echo "<th scope=\"row\"> ";
        echo $this->idEvento;
        echo "</th>";

        echo "<td>";
        echo $this->nombre;
        echo "</td>";

        echo "<td>";
        echo $this->descripcion;
        echo "</td>";

        echo "<td>";
        echo $this->pais;
        echo "</td>";
    }

}

