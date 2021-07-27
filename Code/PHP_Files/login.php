<?php
    session_start();

    require_once("connect.php");

    $conn = OpenConnection();

    $username = $_POST["user_name"];
    $password = $_POST["password"];

    $_SESSION["username"] = "$username";
    
       
    $query = "SELECT id FROM Usuario WHERE nombre_de_usuario='$username' AND clave='$password'";

	$result=mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0)
	{
        echo 0;
        while ($registro = mysqli_fetch_array($result))
        {
            $id = $registro["id"];
            $_SESSION["id"] = "$id";
        }
        //echo " id = " . $_SESSION["id"];
    }
    else
    {
        echo 1;
    }

    CloseConnection($conn);
    exit;
?>