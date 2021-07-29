<?php session_start(); ?>


<html>
  <head>
    <title> Inicio </title>
    <!-- <link rel="stylesheet" href="../CSS Files/main_view.css"> -->
    <?php
      include_once("include_important.php"); 
      include_once("connect.php");
    ?>
  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbar">
        <div class="navbar-nav">
            <a class="nav-link" href="#" id="main_button" >Inicio</a>
            <a class="nav-link active" href="#">Documentos</a>
            <a class="nav-link" href="#">Crear evento</a>
            <a class="nav-link" href="#" id="Categoria_button" >Categorias</a>

            
        </div>
      </div>
      <button class="btn btn-danger" id="logout_button" align="right"> Cerrar Sesión </button>
    </div>
  </nav>


<html>
<head>
<title> Documentos </title>
<link rel="stylesheet" href="../CSS_Files/register.css">
<?php   include_once("include_important.php");  ?>
</head>

<meta charset="utf-8">
<title>Enviar un Archivo con PHP</title>
<style type="text/css">
*{ font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif}
.main{ margin:auto; border:1px solid #fefefe; width:40%; text-align:left; padding:30px; background:#85c587}
input[type=submit]{ background:#6ca16e; width:100%;
    padding:5px 15px; 
    background:#fefefe; 
    cursor:pointer;
	font-size:16px;
}
</style>


<body bgcolor="#bed7c0">
<div class="main">
<h1>Subir Documento</h1>
<br>
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
   <p> Seleccionar archivo: <input name="subir_archivo" type="file" /></p>
   <p> <input type="submit" value="Enviar Archivo" /></p>
</form>
</div>
</body>
</html>




<body background="../../Images/blue_background.jpg"  style="background-size: cover"> 

 


<script>

// main
$('#main_button').click(function()
{
    window.location="main_view.php"; 
    
})


// Categorias
$('#Categoria_button').click(function()
{
    window.location="Categorias_page.php"; 
    
})


// Redirigir a pagina de vista del evento
function show_event(numero)
{
    alert("Hola mundo " + numero);

    window.location="event_view.php?id=" + numero ;
}





