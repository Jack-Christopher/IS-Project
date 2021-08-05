<?php session_start(); ?>

<html>
  <head>
    <title> Inicio (Administrador)</title>
    <?php
      include_once("../Services/include_important.php"); 
      require_once("../../Repositories/Classes/conexion.php");
      include_once("../Models/Evento.php");
      $connection = new Conexion;
    ?>
    <script type="text/javascript" src="../Services/admin_view_functions.js"></script>
  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbar">
        <div class="navbar-nav">
            <a class="nav-link active" href="#">Inicio</a>
            <a class="nav-link" href="#">ABCD</a>
            <a class="nav-link" href="#">DEFG</a>
            <a class="nav-link" href="#">GHIJ</a>

            
        </div>
      </div>
      <button class="btn btn-outline-danger" id="logout_button" onclick="logout();" align="right"> Cerrar Sesión </button>
    </div>
  </nav>

    <br>

    <div class="container">

    <h1 class="display-4">Bienvenido a tu Inicio</h1>
    
    <br><br><br>

    <?php
        $conn = $connection->OpenConnection();
        $query = "SELECT nombre, id, descripcion, pais
                  FROM Evento";

        $result1 = mysqli_query($conn, $query);
    ?>

    
    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col"> <h4> ID de Evento </h4> </th>
                <th scope="col"> <h4> Nombre de Evento </h4> </th>
                <th scope="col"> <h4> Descripcion </h4> </th>
                <th scope="col"> <h4> Pais </h4> </th>                
            </tr>
        </thead>
        
        <tbody>

            <?php
            if(isset($_GET['id']))
            {
                $id_evento = $_GET["id"];
                echo $id_evento;
                $query = "DELETE FROM sesion_usuario WHERE id_sesion=$id_evento";
                $query2 = "DELETE FROM sesion WHERE id_evento=$id_evento";
                $query3 = "DELETE FROM Evento WHERE id=$id_evento";

                mysqli_query($conn, $query);
                mysqli_query($conn, $query2);
                mysqli_query($conn, $query3);
                header('Location: admin_view.php');
                
            }
                while ($registro = mysqli_fetch_array($result1))
                {
                    echo "<tr>";
                    $current_sesion = new Evento( $registro);
                    $current_sesion->print();
                    echo "<td>";
                    ?>
                    
                    <a href="admin_view.php?id=<?php echo $current_sesion->idEvento; ?>" class="btn btn-danger">Eliminar</a>
                    <?php
                    echo "</td>"; 
                    echo "</tr>";
                }
            ?>

        </tbody>
    </table>
    </div>
    <br><br>

    
    <br>
        
    <div class="container">
    <a href="event_register_page.php" class="btn btn-success"> Agregar Evento</a>
    
    <a href="add_category.php" class="btn btn-info"> Agregar Categoría</a>
    </div>
    <br><br>

    </body>
    
</html>








<style>
    .ajs-message { color: #31708f;  background-color: #d9edf7;  border-color: #31708f; }
</style>


<?php


function session_finish()
{
    if ($_GET['logout'] = 'true')
    {
        session_unset();
        session_destroy();
    }
}
?>
