<html>
<head>
<title> Únete a CSC </title>
<link rel="stylesheet" href="CSS_Files/register.css">
<?php   include_once("../Services/include_important.php");  ?>
</head>

<body background="Images/blue_background.jpg"  style="background-size: cover"> 

<br><br>
    <div class="jumbotron" id="signup_container" style="background:#cfe7ff">  <!-- c3f6c3 -->
        <div align="center" >
            <img src="Images/register_icon.png" alt="Icono de registrarse" width="150" height="150"> 
            <h1 class="display-5"> Registrar Autor </h1>
        </div>
        <br>

    <form id="signup_form" >
        <label for="name"> Nombres: </label>
        <input type="text" name="name" id="name" class="form-control">
        <label for="last_name"> Apellidos: </label>
        <input type="text" name="last_name" id="last_name" class="form-control">
        <label for="e_mail"> Correo Electrónico: </label>
        <input type="email" name="e_mail" id="e_mail" class="form-control">
        <label for="cellphone"> Número de celular: </label>
        <input type="tel" name="cellphone" id="cellphone" class="form-control">
        <label for="nationality"> Nacionalidad: </label>
        <input type="text" name="nationality" id="nationality" class="form-control">
        
            <br> 
        
        <div align="right">
            <button type="button" id="submit_button" class="btn btn-success" > Registrarse </button>
        </div>
    
    </form>
    <br>  ¿Ya tienes una cuenta? 
        <a href="event_view.php"> Volver </a>
    </div>
</body>
</html>



<script>
    function formEsValido()
    {
        var nombres = $("#name");
        var apellidos = $("#last_name");
        var correo_electronico = $("#e_mail");
        var numero_de_celular = $("#cellphone");
        var nacionalidad = $("nationality");

        if( nombres.val() == "")
        {
            var op = alertify.alert("Debe colocar sus nombres." );
            return false;
        }
        else if( apellidos.val() == "")
        {
            var op = alertify.alert("Debe colocar sus apellidos." );
            return false;
        }
        else if( correo_electronico.val() == "")
        {
            var op = alertify.alert("Debe colocar su correo electrónico." );
            return false;
        }
        else if( numero_de_celular.val() == "")
        {
            var op = alertify.alert("Debe colocar su numero de celular." );
            return false;
        }
        else if( numero_de_celular.val() == "")
        {
            var op = alertify.alert("Debe colocar su nacionalidad." );
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
                    url: "../../Controller/register_autor.php",
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
							alertify.error("No se pudo registrar su autor.")
						}
                    }
                    
                })
            }
            
        })
    })
</script>
