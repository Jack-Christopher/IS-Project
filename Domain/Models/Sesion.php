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
        $this->id = $result_array["id_sesion"];
        $this->fecha = $result_array["fecha"];
        $this->hora = $result_array["hora"];
        $this->Evento = $result_array["nombre_evento"];
    }

    public function print()
    {
        echo "<th scope=\"row\"> ";
        echo $this->id;
        echo "</th>";

        echo "<td>";
        echo $this->fecha;
        echo "</td>";

        echo "<td>";
        echo $this->hora;
        echo "</td>";

        echo "<td>";
        echo $this->Evento;
        echo "</td>";
    }

}
