<?php

function OpenConnection()
 {
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpassword = "root";
   $dbname = "mainDB";

   $connection = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
   return $connection;
   
 }
 
function CloseConnection($connection)
 {
    $connection = null;
 }

?>