<?php
    session_start();

    require_once("../Repositories/Classes/Conexion.php");
  
    $conn = $connection->OpenConnection();

    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $e_mail = $_POST["e_mail"];
    $cellphone = $_POST["cellphone"];
    $nationality=$_POST["nationality"];
    

               
    $query = "INSERT INTO  autor (nombres, apellidos, correo_electronico, telefono, nacionalidad) VALUES ('$name', '$last_name', '$e_mail', '$cellphone','$nationality');";
    $result = mysqli_query($conn, $query);
    
   
    CloseConnection($conn);
    exit;
?>