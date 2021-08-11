<?php session_start(); ?>

<html>
  <head>
    <title> Inicio (Administrador)</title>
    <?php
      include_once("../Services/include_important.php"); 
      require_once("../../Repositories/Classes/conexion.php");
      include_once("../Models/Persona.php");
      include_once("../Models/Statistics.php");
      $connection = new Conexion;
    ?>
    <script type="text/javascript" src="../Services/admin_view_functions.js"></script>
  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbar">
        <div class="navbar-nav">
            <a class="nav-link active" href="#">Regresar</a>
                        
        </div>
      </div>

    </div>
  </nav>

    <?php
        $conn = $connection->OpenConnection();
        if(isset($_GET['id']))
        {
            $id_evento = $_GET["id"];
            $query = "SELECT
            documento.nombre_archivo,
            documento.cantidad_descargas,
            invitado.nombres 'nombre_invitados',
            invitado.apellidos 'apellidos_invitados',
            organizador.apellidos 'organizador_apellidos',
            sesion.id 'sesion_id',
            sesion.fecha 'sesion_fecha',
            usuario.apellidos 'usuario_apellidos'
        FROM 
            evento,
            documento,
            evento_documento,
            invitado,
            evento_invitado,
            organizador,
            evento_organizador,
            sesion,
            evento_sesion,
            usuario
        WHERE
            evento_documento.id_evento = 4 AND
            documento.id = evento_documento.id_documento AND
            evento_invitado.id_evento = 4 AND
            invitado.id = evento_invitado.id_invitado AND
            evento_organizador.id_evento = 4 AND
            organizador.id = evento_organizador.id_organizador AND
            evento_sesion.id_evento = 4 AND
            sesion.id = evento_sesion.id_sesion
        LIMIT
            50%";
                
        }
        $result1 = mysqli_query($conn, $query);
        $temp = mysqli_fetch_array($result1);
    ?>

    <br><br><br>

    
    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                
                <th scope="col"> <h4> Documentos </h4> </th>
                <th scope="col"> <h4> Descargas del doc </h4> </th>
                <th scope="col"> <h4> Nombre de los Invitados </h4> </th>
                <th scope="col"> <h4> Apellido de los Invitados </h4> </th>
                <th scope="col"> <h4> Organizadores </h4> </th>
                <th scope="col"> <h4> ID Sesiones </h4> </th>
                <th scope="col"> <h4> Fecha Sesiones </h4> </th>
                <th scope="col"> <h4> Usuarios </h4> </th>
            </tr>
        </thead>
        
        <tbody>

            <?php
            
            while ($registro = mysqli_fetch_array($result1))
                {
                    echo "<tr>";
                    $current_event = new Statictics($registro);
                    $datos = $current_event->get_values();
                    echo "<th scope=\"row\"> ";
                    echo $datos['nombre_archivo'];
                    echo "</th>";

                    echo "<td>";
                    echo $datos['cantidad_descargas'];
                    echo "</td>";

                    echo "<td>";
                    echo $datos['invitado_nombres'];
                    echo "</td>";

                    echo "<td>";
                    echo $datos['invitado_apellidos'];
                    echo "</td>";

                    echo "<td>";
                    echo $datos['organizador_apellidos'];
                    echo "</td>";

                    echo "<td>";
                    echo $datos['sesion_id'];
                    echo "</td>";

                    echo "<td>";
                    echo $datos['sesion_fecha'];
                    echo "</td>";

                    echo "<td>";
                    echo $datos['usuario_apellidos'];
                    echo "</td>";
                }
            ?>

        </tbody>
    </table>
    </div>
    <br><br><br>
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
