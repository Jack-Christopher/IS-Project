<?php

/*include("../Interfaces/iConexion.php");*/

class Conexion /*implements iConexion*/
{
  public $dbhost;
  public $dbuser;
  public $dbpassword;
  public $dbname;
  public $conexion;
  
  public function __construct()
  {
    $this->dbhost = "localhost";
    $this->dbuser = "root";
    $this->dbpassword = "root";
    $this->dbname = "mainDB";
    $this->conexion = null;
  }

  public function OpenConnection()
  {
    $this->connection = new mysqli($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname);
    return $this->connection;
  }
 
  function CloseConnection()
  {
    $this->conexion = null;
  }

}

?>