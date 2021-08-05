<?php session_start(); ?>

<html>
  <head>
    <title> Inicio </title>
    <!-- <link rel="stylesheet" href="../CSS Files/main_view.css"> -->
    <?php
      include_once("../Services/include_important.php"); 
      require_once("../../Repositories/Classes/conexion.php");
      $connection = new Conexion;
    ?>
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
      <button class="btn btn-danger" id="logout_button" align="right"> Cerrar Sesión </button>
    </div>
  </nav>

    <br>

    <div class="container">

    <h1 class="display-4">Bienvenido a tu Inicio</h1>
    <br><br>

    <?php
        $conn = $connection->OpenConnection();
        $id = $_SESSION["id"];
        $query = "SELECT DISTINCT ev.id \"id_evento\" , ev.nombre \"nombre_evento\"
                  FROM sesion S, sesion_usuario SU, Evento ev 
                  WHERE (id_usuario = $id AND S.id = SU.id_sesion) AND ev.id = S.id_evento";


        $result = mysqli_query($conn, $query);
    ?>

    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"> <h4> Número de Evento </h4> </th>
                <th scope="col"> <h4> Nombre de Evento </h4> </th>
            </tr>
        </thead>
        
        <tbody>

            <?php
                while ($registro = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    
                        echo "<th scope=\"row\"> ";
                            echo $registro["id_evento"];
                        echo "</th>";

                        echo "<td>";
                            echo $registro["nombre_evento"];
                        echo "</td>";

                        echo "<td>";

                            echo "<button type=\"button\" id=\"view_button\" 
                            onclick= \"show_event(" . $registro["id_evento"] . ")\" 
                            class=\"btn btn-primary\" > Ver  </button>";
                        echo "</td>";

                    echo "</tr>";
                }

            ?>

        </tbody>
    </table>


    </div>
    
    <br>
        
    <div class="container">
    <a href="#" class="btn btn-success"> Anotarse a Evento/Sesión</a>
    </div>
    
    <br><br><br>

    <?php
        $query = "SELECT S.id \"id_sesion\", ev.nombre \"nombre_evento\", S.fecha, TIME_FORMAT(S.hora, \"%h:%i %p\") \"hora\" 
                  FROM sesion S, sesion_usuario SU, Evento ev 
                  WHERE (SU.id_usuario = $id AND S.id = SU.id_sesion) AND ev.id = S.id_evento";


        $result1 = mysqli_query($conn, $query);
    ?>

    
    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"> <h4> Número de Sesión </h4> </th>
                <th scope="col"> <h4> Fecha de Sesión </h4> </th>
                <th scope="col"> <h4> Hora de Sesión </h4> </th>
                <th scope="col"> <h4> Nombre de Evento </h4> </th>
            </tr>
        </thead>
        
        <tbody>

            <?php
                while ($registro1 = mysqli_fetch_array($result1))
                {
                    echo "<tr>";
                    
                        echo "<th scope=\"row\"> ";
                            echo $registro1["id_sesion"];
                        echo "</th>";

                        echo "<td>";
                            echo $registro1["fecha"];
                        echo "</td>";

                        echo "<td>";
                            echo $registro1["hora"];
                        echo "</td>";

                        echo "<td>";
                            echo $registro1["nombre_evento"];
                        echo "</td>";

                        echo "<td>";
                            echo "<button type=\"button\" id=\"view_button\" class=\"btn btn-warning\" > Abandonar </button>";
                        echo "</td>"; 
                        
                    echo "</tr>";
                }

            ?>

        </tbody>
    </table>
    </div>
    <br><br>

    </body>
    
</html>







<script>

// Redirigir a pagina de vista del evento
function show_event(id_evento)
{
    window.location="event_view.php?id=" + id_evento ;
}




// Cerrar sesión
$('#logout_button').click(function()
{
    $.ajax({
        url:'main_view.php?logout=true',
        type:'GET',
        success: function() 
        {
            alertify.confirm('¿Desea cerrar su sesión?',
            function()
            {
                alertify.set('notifier','position', 'top-center');
                alertify.message("Hasta luego.", 4);
                window.setTimeout(function()
                {
                    window.location="login_page.php";    
                } , 2500); 
            },
            function()
            {
                alertify.set('notifier','position', 'top-center');
                alertify.message("Siga con nosotros.", 4);
            }

            ).setHeader("Atención");
            
    	}
    })

})
</script>

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
