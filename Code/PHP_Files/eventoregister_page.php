<html>
<head>
<title> Eventos </title>
<link rel="stylesheet" href="../CSS_Files/register.css">
<?php
      include_once("include_important.php"); 
      include_once("connect.php");
?>
</head>

<body background="../../Images/blue_background.jpg"  style="background-size: cover"> 

    <div class="jumbotron" id="signup_container" style="background:#cfe7ff">  <!-- c3f6c3 -->
        <div align="center" >
            <img src="../../Images/calendar.png" alt="Icono de calendario" width="150" height="150"> 
            <h1 class="display-5"> Registre Evento </h1>
        </div>
        <br>

<form id="evento_form">
  <label for="nombre_evento">Nombre:</label><br>
  <input type="text" id="nombre_evento" name="nombre_evento" value=""><br>

  <label for="categoria_evento1">Categoria1:</label><br>
  <input type="checkbox" id="cat1" name="cat1" value="IA">
  <label for="cat1"> IA</label><br>
  <input type="checkbox" id="cat2" name="cat2" value="InteraccionH/C">
  <label for="cat2"> InteraccionH/C</label><br>
  <input type="checkbox" id="cat3" name="cat3" value="Arquitectura">
  <label for="cat3"> Arquitectura</label><br>
  <input type="checkbox" id="cat4" name="cat4" value="Redes">
  <label for="cat4"> Redes</label><br>

  <label for="descripcion_evento">Descripcion:</label><br>
  <input type="text" id="descripcion_evento" name="descripcion_evento" value=""><br>

  <label for="pais_evento">Pais:</label><br>
  <input type="text" id="pais_evento" name="pais_evento" value=""><br>

  <label for="asistentes">Cantidad asistentes: (Opcional)</label><br>
  <input type="text" id="asistentes" name="asistentes" value=""><br>
  <br>
  

  
  
  <div align="right">
            <button type="button" id="submit_button" class="btn btn-success" > Registrarse </button>
  </div>
</form> 

</body>
</html>

<script>
    function formEsValido()
    {
        var nombre = $("#nombre_evento");
        var descripcionEvento = $("#descripcion_evento");
        var cate1 = $("#categoria_evento1");

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

        return true;
    }

    $(document).ready( function() 
    { 
        $("#submit_button").click( function() 
        {
            if(formEsValido())
            {
                cadena = $("#signup_form").serialize();

                $.ajax(
                {
                    type: 'POST',
                    url: "eventoregister.php",
                    data: cadena,
                    success: function(data) 
                    {
                        if(data==0)
                        {
                            /*alertify.set('notifier','position', 'top-center');*/
                            message = alertify.success("El registro se realizó exitosamente");
                            
                            window.setTimeout(function()
                            {
                                message = alertify.success("Redirigiendo a la página principal ...");
                            } , 3000);

                            window.setTimeout(function()
                            {
                                window.location="main_view.php";
                            } , 6000);
                            
                        }
                        else 
						{
							alertify.error("No se pudo registrar sus usuario.")
						}
                    }
                    
                })
            }
            
        })
    })
</script>

 



