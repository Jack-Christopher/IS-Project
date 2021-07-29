<?php
    session_start();

    require_once("connect.php");

    $conn = OpenConnection();

    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $e_mail = $_POST["e_mail"];
    $cellphone = $_POST["cellphone"];
    $username = $_POST["user_name"];
    $password = $_POST["password"];
    

    $_SESSION["username"] = "$username";
               
    $query = "INSERT INTO  usuario (nombres, apellidos, correo_electronico, nombre_de_usuario, clave, telefono) VALUES ('$name', '$last_name', '$e_mail', '$username', '$password', '$cellphone');";
    $result = mysqli_query($conn, $query);
    
    $last_id_query = "SELECT MAX(id) FROM Usuario;";
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