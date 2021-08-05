<?php
    session_start();
    require_once("../Repositories/Classes/Conexion.php");
    $connection = new Conexion;

    $conn = $connection->OpenConnection();

    $username = $_POST["user_name"];
    $password = $_POST["password"];

    $_SESSION["username"] = "$username";
    
       
    $query1 = "SELECT id FROM Usuario WHERE nombre_de_usuario='$username' AND clave='$password'";
    $query2 = "SELECT id FROM Organizador WHERE nombre_de_usuario='$username' AND clave='$password'";

	$result1=mysqli_query($conn, $query1);
    $result2=mysqli_query($conn, $query2);

	if(mysqli_num_rows($result1) > 0)
	{
        echo 0;
        while ($registro = mysqli_fetch_array($result1))
        {
            $id = $registro["id"];
            $_SESSION["id"] = "$id";
        }
        $_SESSION["permisos"] = "admin";
    }
    else if (mysqli_num_rows($result2) > 0)
    {
        echo 1;
        while ($registro = mysqli_fetch_array($result2))
        {
            $id = $registro["id"];
            $_SESSION["id"] = "$id";
        }
        $_SESSION["permisos"] = "user";
    }
    else
    {
        echo 2;
    }

    $connection->CloseConnection();
    exit;
?>