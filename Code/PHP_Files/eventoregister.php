<?php
    session_start();

    require_once("connect.php");

    $conn = OpenConnection();

    $nombre_evento = $_POST["nombre_evento"];
    $pais_evento = $_POST["pais_evento"];
    $asistentes = $_POST["asistentes"];
    $descripcion_evento = $_POST["descripcion_evento"];

    $_SESSION["username"] = "$username";
               
    $query = "INSERT INTO evento(nombre,descripcion,pais,cantidad_asistentes)
		VALUES ('$nombre_evento','$descripcion_evento','$pais_evento',$asistentes);";
    $result = mysqli_query($conn, $query);
    
    $last_id_query = "SELECT MAX(id) FROM evento;";
    $result = mysqli_query($conn, $last_id_query);
    $last_id = mysqli_fetch_row($result);   
    $id = trim( $last_id[0]);
    $_SESSION["id"] = $id;

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