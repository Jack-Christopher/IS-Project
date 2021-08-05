// Cerrar sesión
function logout()
{
    $.ajax({
        url:'main_view.php?logout=true',
        type:'GET',
        success: function() 
        {
            alertify.confirm('¿Desea cerrar su sesión?',
            function()
            {
                alertify.set('notifier','position', 'top-center');
                alertify.message("Hasta luego.", 3);
                window.setTimeout(function()
                {
                    window.location="login_page.php";    
                } , 1500); 
            },
            function()
            {
                alertify.set('notifier','position', 'top-center');
                alertify.message("Siga con nosotros.", 4);
            }

            ).setHeader("Atención");
            
    	}
    })

}
