<html>
<head>
<title> Únete a CSC </title>
<link rel="stylesheet" href="../CSS_Files/register.css">
<?php   include_once("include_important.php");  ?>
</head>

<body background="../../Images/blue_background.jpg"  style="background-size: cover"> 

<br><br>
    <div class="jumbotron" id="signup_container" style="background:#cfe7ff">  <!-- c3f6c3 -->
        <div align="center" >
            <img src="../../Images/register_icon.png" alt="Icono de registrarse" width="150" height="150"> 
            <h1 class="display-5"> Registrarse </h1>
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
        <label for="user_name"> Nombre de Usuario: </label>
        <input type="text" name="user_name" id="user_name" class="form-control">
        <label for="password"> Contraseña </label>
        <input type="password" name="password" id="password" class="form-control">
        <label for="password_again"> Repite tu contraseña </label>
        <input type="password" name="password_again" id="password_again" class="form-control">

            <br> 
        
        <div align="right">
            <button type="button" id="submit_button" class="btn btn-success" > Registrarse </button>
        </div>
    
    </form>
    <br>  ¿Ya tienes una cuenta? 
        <a href="login_page.php"> Inicia Sesión </a>
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
        var nombre_de_usuario = $("#user_name");
        var clave_de_usuario = $("#password");
        var clave_de_usuario2 = $("#password_again");

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
        else if( nombre_de_usuario.val() == "")
        {
            var op = alertify.alert("Debe colocar su nombre de usuario.");
            return false;
        }
        else if( clave_de_usuario.val() == "")
        {
            var op = alertify.alert("Debe colocar su clave de usuario." );
            return false;
        }
        else if( clave_de_usuario2.val() == "")
        {
            var op = alertify.alert("Debe colocar su clave de usuario otra vez." );
            return false;
        }
        else if ( clave_de_usuario.val() != clave_de_usuario2.val())
        {
            var op = alertify.alert("Las clave de usuario deben conincidir." );
            return false;
        }

        return true;
    }

    /// 
    /// Funcion para escribir error sobre un mensaje 
    ///
    function ErrorMessage($message)
    {
        $message = "Redirigiendo a la página principal ..."
    }

    /// 
    /// Funcion para setear un window. 
    ///

    function setLocation($window,$new_location)
    {
        window.location=$newl;
    }
    /// 
    /// Funcion principal del register
    ///
    function register_main($condition)
    {
        if($condition==true)
        {
            cadena = $("#signup_form").serialize();

            $.ajax(
            {
                type: 'POST',
                url: "register.php",
                data: cadena,
                success: function(data) 
                {
                    if(data==0)
                    {
                        /*alertify.set('notifier','position', 'top-center');*/
                        message = alertify.success("El registro se realizó exitosamente");
                        
                        
                        window.setTimeout(ErrorMessage(message) , 3000);
                        
                        window.setTimeout(setLocation(window,"main_view.php") , 6000);
                        
                    }
                    else 
                    {
                        alertify.error("No se pudo registrar sus usuario.")
                    }
                }

             })
        }
    }
    
    ///
    /// Composicion de funciones, o pipeline de funciones.
    ///
    $(document).ready( function() 
    { 
        $("#submit_button").click(function() {register_main(formEsValido())})
    })


</script>
