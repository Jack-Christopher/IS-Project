<html>
  <head>
    <title> Inicio </title>
    <?php
      include_once("../Services/include_important.php"); 
      require_once("../../Repositories/Classes/conexion.php");
      include_once("../Models/Sesion.php");
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

    <?php
        $id_event = $_GET['id'];
        $conn = $connection->OpenConnection();
        $query = "SELECT * FROM Evento WHERE id=" . $id_event . " limit 1";
        $result = mysqli_query($conn, $query);
        $evento = $result->fetch_object();
    ?>

    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"> 
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col"> 
                        <h1 class="display-4">Evento: <?php echo $evento->nombre ?> </h1>
                      </th>
                    </tr>
                </thead>
                
                <tbody>
                  <tr>
                      <th scope="col"> 
                        <h1 class="display-5">Pais: <?php echo $evento->pais ?> </h1>
                      </th>
                  </tr>
                  <tr>
                      <th scope="col"> 
                          <h2 class="display-6">Descripción: <?php echo $evento->descripcion ?> </h2>
                      </th>       
                  </tr>
                </tbody>
            </table>
            </th> 

            <th scope="col"> 
              <img  src='../../Images/<?php echo $_GET['id'] ?>.jpg' style='width: 300px; height:auto;'> </img>
            </th>
          </tr>
        </thead> 
      </table> 

       
        <br>

    
        <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col"> <h4> ID de Sesion </h4> </th>
                <th scope="col"> <h4> hora  </h4> </th>
                <th scope="col"> <h4> fecha </h4> </th>
                <th scope="col"> <h4> Descripcion  </h4> </th>                
            </tr>
        </thead>
        
        <tbody>

            <?php
            
          $query = "SELECT id, fecha, hora, informacionExtra FROM sesion WHERE id_evento =". $_GET['id'].";";
          $result2 = mysqli_query($conn, $query);
          while ($registro = mysqli_fetch_array($result2))
          {
              echo "<tr>";
              $current_event = new Sesion( $registro);
              $datos = $current_event->get_values();
              echo "<th scope=\"row\"> ";
              echo $datos['id'];
              echo "</th>";

              echo "<td>";
              echo $datos['hora'];
              echo "</td>";

              echo "<td>";
              echo $datos['fecha'];
              echo "</td>";

              echo "<td>";
              echo $datos['informacionExtra'];
              echo "</td>";

              echo "</tr>";
          }
          
            ?>

        </tbody>
    </table>
    </div>
    <br><br>

        
    <div class="container">

    <a href="main_view.php" class="btn btn-success"> Regresar </a>
    </div>
    
    <br><br><br>

