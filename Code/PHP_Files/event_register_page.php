<html>
<head>
<title> Registrar Evento </title>
<link rel="stylesheet" href="../CSS_Files/register.css">
<?php
      include_once("include_important.php"); 
      include_once("connect.php");
?>
</head>

<body background="../../Images/blue_background.jpg"  style="background-size: cover"> 

    <br><br>
    <div class="jumbotron" id="signup_container" style="background:#cfe7ff"> 
        <div align="center" >
            <img src="../../Images/calendar.png" alt="Icono de calendario" width="150" height="150"> 
            <br><br>
            <h1 class="display-5"> Registre Evento </h1>
        </div>
        <br>

<form id="event_form">
  <label for="nombre_evento">Nombre:</label><br>
  <input type="text" id="nombre_evento" name="nombre_evento" value="" class="form-control"><br>
  
  <?php
    $conn = OpenConnection();
    $query = "SELECT * FROM Categoria";
    $result = mysqli_query($conn, $query);
  ?>

  <label for="categoria">Categoria:</label><br>

  
    <?php
    while ($registro = mysqli_fetch_array($result))
    {
    ?>
    <input type="radio" id="<?php echo "option" . $registro["id"] ?>" name="category" value="<?php echo "option" . $registro["id"] ?>">
    <label for="<?php echo "option" . $registro["id"] ?>"> <?php echo $registro["nombre"]?> </label>
    <br>
    <?php
    }
    ?>
     <br>
  
  <label for="descripcion_evento">Descripcion:</label><br>
  <input type="text" id="descripcion_evento" name="descripcion_evento" value="" class="form-control"><br>

  <label for="pais_evento">Pais:</label><br>
  <input type="text" id="pais_evento" name="pais_evento" value="" class="form-control"><br>

  <label for="asistentes">Cantidad asistentes: </label><br>
  <input type="number" id="asistentes" name="asistentes" value="" class="form-control"><br>
  <br>
    
  <div align="right">
    <button type="button" id="submit_button" class="btn btn-success" > Ingresar Evento </button>
  </div>
</form> 

<a href="admin_view.php" class="btn btn-danger"> Regresar</a>
</body>
</html>

<script>
    function formEsValido()
    {
        var nombre = $("#nombre_evento");
        var descripcionEvento = $("#descripcion_evento");
        var categoria = $("#category");
        var asistentes = $("#asistentes");

        if( nombre.val() == "")
        {
            var op = alertify.alert("Debe colocar un nombre de evento." );
            return false;
        }
        else if( descripcionEvento.val() == "")
        {
            var op = alertify.alert("Debe colocar una descripcion." );
            return false;
        }
        else if( !$('input[type=radio]:checked').size() > 0)
        {
            var op = alertify.alert("Debe elegir una categoria." );
            return false;
        }
        else if( asistentes.val() == "")
        {
            var op = alertify.alert("Debe colocar una cantidad de asistentes." );
            return false;
        }

        return true;
    }

    
    $(document).ready( function() 
    { 
        $("#submit_button").click( function() 
        {
            if(formEsValido())
            {
                cadena = $("#event_form").serialize();

                $.ajax(
                {
                    type: 'POST',
                    url: "event_register.php",
                    data: cadena,
                    success: function(data) 
                    {
                        if(data==0)
                        {
                            message = alertify.success("El registro se realizó exitosamente");
                        }
                        else 
						{
							alertify.error("No se pudo registrar el evento.");
                            window.location = "event_register_page.php";
						}
                    }
                    
                })
            }
            
        })
    })
</script>
