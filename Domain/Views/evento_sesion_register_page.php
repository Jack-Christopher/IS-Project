<html>
<head>
<title>evento_sesion_register_page.php</title>
<link rel="stylesheet" href="CSS_Files/register.css">
<?php
      include_once("../Services/include_important.php"); 
      require_once("../../Repositories/Classes/conexion.php");
      $connection = new Conexion;
?>
<script type="text/javascript" src="../Services/sesion_register_functions.js"></script>
</head>

<body background="Images/blue_background.jpg"  style="background-size: cover"> 

    <br><br>
    <div class="jumbotron" id="signup_container" style="background:#cfe7ff"> 
        <div align="center" >
            <img src="Images/sesion.png" alt="Icono de Sesion" width="150" height="150"> 
            <br><br>
            <h1 class="display-5"> Agregue una sesión </h1>
        </div>
        <br>

        
        
<form id="sesion_form">
  <label for="hora_sesion">Hora: (HH:MM:SS)</label><br>
  <input type="text" id="hora_sesion" name="hora_sesion" value="" class="form-control"><br>
  
  <label for="fecha_sesion">Fecha: (AAAA:MN:DD)</label><br>
  <input type="text" id="fecha_sesion" name="fecha_sesion" value="" class="form-control"><br>

  <label for="descripcion_sesion">Descripcion:</label><br>
  <input type="text" id="descripcion_sesion" name="descripcion_sesion" value="" class="form-control"><br>

  <label for="idEvento">Número de Evento:</label><br>
  <input type="text" id="idEvento" name="idEvento" value=<?php echo $_GET["id_eventoo"]; ?> class="form-control"><br>
    <br>

  <div align="right">
    <button type="button" id="submit_button" class="btn btn-success" onclick="register_sesion()" > Ingresar sesión </button>
  </div>
</form> 

<a href="admin_view.php" class="btn btn-danger"> Regresar</a>
</body>
</html>