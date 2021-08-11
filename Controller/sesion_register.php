<?php
    require_once("../Repositories/Classes/Conexion.php");

    $connection = new Conexion;
    $conn = $connection->OpenConnection();

    $hora_sesion = $_POST["hora_sesion"];
    $fecha_sesion = $_POST["fecha_sesion"];
    $descripcion_sesion = $_POST["descripcion_sesion"];
    $evento_id = $_POST["idEvento"];

    $query = "INSERT INTO sesion(hora,fecha,informacionExtra,id_evento)
		VALUES ('$hora_sesion','$fecha_sesion','$descripcion_sesion','$evento_id');";
    $result = mysqli_query($conn, $query);
    
    if ($result)
    {
        echo 0;
    }
    else
    {
        echo 1;
    }

    $connection->CloseConnection();
    exit;
?>