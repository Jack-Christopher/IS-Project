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
            <a class="nav-link active" href="#">Inicio</a>
            <a class="nav-link" href="#">ABCD</a>
            <a class="nav-link" href="#">DEFG</a>
            <a class="nav-link" href="#">GHIJ</a>

            
        </div>
      </div>
      <button class="btn btn-danger" id="logout_button" align="right"> Cerrar Sesión </button>
    </div>
  </nav>

    <br>

    <?php
        $id_event = $_GET['id'];
        $conn = OpenConnection();
        $query = "SELECT * FROM Evento WHERE id=" . $id_event . " limit 1";
        $result = mysqli_query($conn, $query);
        $evento = $result->fetch_object();
    ?>

    <div class="container">
        <h1 class="display-4">Evento: <?php echo $evento->nombre ?> </h1>
        <br><br>
        <h1 class="display-5">Pais: <?php echo $evento->pais ?> </h1>
        <br><br>
        <h2 class="display-6">Descripción: <?php echo $evento->descripcion ?> </h2>
        <br><br>

        
       
        <br>
        
    <div class="container">

    <a href="../PHP_Files/main_view.php" class="btn btn-success"> Regresar </a>
    </div>
    
    <br><br><br>

