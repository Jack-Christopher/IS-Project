<?php
interface iConexion
{
  public function __construct();

  public function OpenConnection();
 
  public function CloseConnection();

}

?>