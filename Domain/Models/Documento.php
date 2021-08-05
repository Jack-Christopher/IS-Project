<?php

declare(strict_types=1);


class Documento
{
    public  $id;
    public  $titulo;
    public  $autor;
    public  $numDescargas;

    public function __construct($result_array)
    {
        $this->id = $result_array["id_sesion"];
        $this->titulo = $result_array["fecha"];
        $this->autor = $result_array["hora"];
        $this->numDescargas = $result_array["nombre_evento"];
    }


}
