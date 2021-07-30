<!-- Interfaz de usuario -->
<html>
<head>
    <title> Bienvenido a Organizador de Horario </title>
    <link rel="stylesheet" href="../CSS_Files/login.css">

    <?php   include_once("include_important.php");  ?>

</head>

<body background="../../Images/blue_background.jpg"  style="background-size: cover"> 
   
    <br>
    <div class="jumbotron" id="login_container"  style="background:#cfe7ff">
        <div align="center" >
            <img src="../../Images/login_icon.png" alt="Icono de inicio de sesión" width="150" height="150"> 
            <br>
            <h1 class="display-5"> Iniciar Sesión </h1>
            <br>
        </div> 

    <form id="login_form" >
        <label for="user_name"> Nombre de Usuario: </label>
        <input type="text" name="user_name" id="user_name" class="form-control">
        <label for="password"> Contraseña </label>
        <input type="password" name="password" id="password" class="form-control">

            <br> 
        
        <div align="right">
            <button type="button" id="submit_button" class="btn btn-primary" > Iniciar Sesión </button>
        </div>
    </form>
    <br>  ¿No tienes una cuenta? 
        <a href="register_page.php"> Regístrate </a>
    </div>
    <br>
</body>
</html>

<script>

    function verificarNombre(nombre_de_usuario)
    {

        if(nombre_de_usuario.val() == "")
        {
            var op = alertify.alert("Debe colocar su nombre de usuario.").setHeader("Atención");
            return false;
        }

        return true;
    }

    function verificarClave(clave_de_usuario)
    {
        if(clave_de_usuario.val() == "")
        {
            var op = alertify.alert("Debe colocar su clave de usuario" ).setHeader("Atención");
            return false;
        }

        return true;
    }

    //Controller
    function formEsValido()
    {
        var nombre_de_usuario = $("#user_name");
        var clave_de_usuario = $("#password");

        if(verificarNombre(nombre_de_usuario) && verificarClave(clave_de_usuario))
        {
            return true;
        }

        return false;
    }

    //Servidor
    
    function ejecutarInicioSesion()
    {
        cadena = $("#login_form").serialize();

        $.ajax(
        {
            type: 'POST',
            url: "login.php",
            data: cadena,
            success: function(data) 
            {
                if(data==0)
                {
                    alertify.success("Inicio de sesión exitoso");
                    window.setTimeout(function()
                    {
                        window.location="main_view.php";
                    } , 2000);
                        
                         
                }
                else if (data == 1)
                {
                    alertify.error("Los datos ingresados son incorrectos.")
                }
                else
                {
                    alertify.error("Ha ocurrido un error." )
                }
            }
                
        })
    }

    $(document).ready( function() 
    { 
        $("#submit_button").click( function() 
        {
            if(formEsValido())
            {
                ejecutarInicioSesion();
            }
            
        })
    })
</script>
