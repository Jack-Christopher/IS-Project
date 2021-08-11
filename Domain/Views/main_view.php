<?php session_start(); ?>

<html>
  <head>
    <title> Inicio </title>
    <?php
      include_once("../Services/include_important.php"); 
      require_once("../../Repositories/Classes/conexion.php");
      include_once("../Models/Evento.php");
      include_once("../Models/Persona.php");
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

    <?php
        $conn = $connection->OpenConnection();
        $id = $_SESSION["id"];
        // $query = "SELECT DISTINCT ev.id \"id_evento\" , ev.nombre \"nombre_evento\"
        //           FROM sesion S, sesion_usuario SU, Evento ev 
        //           WHERE (id_usuario = $id AND S.id = SU.id_sesion) AND ev.id = S.id_evento";
        
       
        $query = "SELECT nombre, id, descripcion, pais
                  FROM Evento";
        $query2 = "SELECT id, nombres, apellidos, correo_electronico, telefono FROM";
        
        if ($_SESSION["permisos"] == "admin")
        {
            $query2 = $query2 . " Organizador";
        }
        else
        {
            $query2 = $query2 . " Usuario";
        }

        $result = mysqli_query($conn, $query);

        $result2 = mysqli_query($conn, $query2);
        $temp = mysqli_fetch_array($result2);
        $usuario = new Persona($temp, "Usuario");  
    ?>

    
    <h1 class="display-4">Bienvenido a tu Inicio, <?php echo $usuario->nombres;?></h1>
    <br><br>

    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"> <h4> Número de Evento </h4> </th>
                <th scope="col"> <h4> Nombre de Evento </h4> </th>
            </tr>
        </thead>
        
        <tbody>
        
            <?php
                $ids = [];
                        
                while ($registro = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    
                    $current_event = new Evento( $registro);
                    $datos = $current_event->get_values();
                    echo "<th scope=\"row\"> ";
                        echo $registro["id"];
                    echo "</th>";

                    echo "<td>";
                        echo $registro["nombre"];
                    echo "</td>";
                        

                    echo "<td>";
                    echo $registro['descripcion'];
                    echo "</td>";

                    echo "<td>";
                    echo $registro['pais'];
                    echo "</td>";

                        echo "<td>";

                            echo "<button type=\"button\" id=\"view_button\" 
                            onclick= \"show_event(" . $registro["id"] . ")\" 
                            class=\"btn btn-primary\" > Ver  </button>";
                        echo "</td>";

                    echo "</tr>";
                    array_push($ids,$registro["id"]);
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
                //PArte 2, edicion poroto
    <?php

        foreach ($ids as $i) {
            print($i);
            print(" ");
            # code...
        }
    
        $query = "SELECT S.id \"id_sesion\", ev.nombre \"nombre_evento\", S.fecha, TIME_FORMAT(S.hora, \"%h:%i %p\") \"hora\" 
                  FROM sesion S, sesion_usuario SU, Evento ev 
                  WHERE (SU.id_usuario = $id AND S.id = SU.id_sesion) AND ev.id = S.id_evento";


        $result1 = mysqli_query($conn, $query);
    ?>

    
    

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
