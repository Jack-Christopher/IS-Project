
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

function editt_event()
{
    $("#submit_buttonn")
    {
        if(formEsValido())
        {
            cadena = $("#event_formm").serialize();
            alert(cadena);
            
            $.ajax(
            {
                type: 'POST',
                url: "../../Controller/event_edit.php",
                data: cadena,
                success: function(data) 
                {
                    if(data==0)
                    {
                        message = alertify.success("El evento se editó exitosamente");
                    }
                    else 
                    {
                        alertify.error("No se pudo editar el evento.");
                        window.location = "admin_view.php";
                    }
                }
                    
            })
        }
    }
}
