<?php
    require_once("connect.php");

    $conn = OpenConnection();

    $nombre_evento = $_POST["nombre_evento"];
    $pais_evento = $_POST["pais_evento"];
    $categoria = $_POST["category"];
    $asistentes = $_POST["asistentes"];
    $descripcion_evento = $_POST["descripcion_evento"];

    $query = "INSERT INTO evento(nombre,descripcion,pais,cantidad_asistentes)
		VALUES ('$nombre_evento','$descripcion_evento','$pais_evento',$asistentes);";
    $result = mysqli_query($conn, $query);
    
    if ($result)
    {
        echo 0;
    }
    else
    {
        echo 1;
    }

    CloseConnection($conn);
    exit;
?>