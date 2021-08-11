
function formEsValido()
{
    var hora = $("#hora_sesion");
    var descripcion = $("#descripcion_sesion");
    var fecha = $("#fecha_sesion");

    if( hora.val() == "")
    {
        var op = alertify.alert("Debe colocar una hora." );
        return false;
    }
    /*else if ( hora.lenght != 8)
    {
        var op = alertify.alert("Debe colocar la hora en formato HH:MM:SS." );
        return false;
    }*/
    else if( descripcion.val() == "")
    {
        var op = alertify.alert("Debe colocar una descripcion." );
        return false;
    }
    else if( fecha.val() == "")
    {
        var op = alertify.alert("Debe colocar una fecha." );
        return false;
    }
    /*else if( fecha.lenght != 10)
    {
        var op = alertify.alert("Debe colocar la fecha en formato AAAA:MN:DD." );
        return false;
    }*/
 
    return true;
}

function register_sesion()
{ 
    $("#submit_button")
    {
        if(formEsValido())
        {
            cadena = $("#sesion_form").serialize();
            alert(cadena);

            $.ajax(
            {
                type: 'POST',
                url: "../../Controller/sesion_register.php",
                data: cadena,
                success: function(data) 
                {
                    if(data==0)
                    {
                        message = alertify.success("El registro se realizó exitosamente");
                        window.location = "admin_view.php";
                    }
                    else 
					{
						alertify.error("No se pudo registrar la sesión.");
                        window.location = "evento_sesion_register_page.php";
					}
                }
                
            })
        }
    }
}