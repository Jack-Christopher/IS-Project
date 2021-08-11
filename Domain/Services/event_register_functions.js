
function formEsValido()
{
    var nombre = $("#nombre_evento");
    var descripcionEvento = $("#descripcion_evento");
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

function register_event()
{ 
    $("#submit_button")
    {
        if(formEsValido())
        {
            cadena = $("#event_form").serialize();
            alert(cadena);

            $.ajax(
            {
                type: 'POST',
                url: "../../Controller/event_register.php",
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
    }
}
