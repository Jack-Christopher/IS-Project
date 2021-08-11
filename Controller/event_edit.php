
<?php
    require_once("../Repositories/Classes/Conexion.php");

    $connection = new Conexion;
    $conn = $connection->OpenConnection();
    $id_evento = $_POST["id_evento"];
    $nombre_evento = $_POST["nombre_evento"];
    $pais_evento = $_POST["pais_evento"];
    $categoria = $_POST["category"];
    $asistentes = $_POST["asistentes"];
    $descripcion_evento = $_POST["descripcion_evento"];



    $query = "UPDATE evento
                SET nombre = '$nombre_evento',
                descripcion = '$descripcion_evento',
                pais = '$pais_evento',
                cantidad_asistentes = '$asistentes'
                WHERE id = $id_evento;";
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