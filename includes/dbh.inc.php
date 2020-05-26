<?php

// $dbServername = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName = "pool_php_rush";
// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);



function connect_db($host, $username, $passwd, $port, $db)
{
  $dbinfo = "mysql:host=".$host.";dbname=".$db.";port=".$port;

  if (($host != NULL) && ($username != NULL) && ($port != NULL) && ($db != NULL))
  {
    try
    {
      $db = new PDO($dbinfo, $username, $passwd);
      return $db;
    }

    catch (PDOException $e)
    {
      echo "PDO ERROR"." ".$e->getMessage();
      $errorMsg = "Error connection to DB";
      echo $errorMsg.PHP_EOL;
    }
  }
  
  else
  {
    $error = "Bad params! Usage: php connect_db.php host username password port db";
    echo $error.PHP_EOL;
  }
}

$conn = connect_db('localhost', 'root', '', 3306, 'pool_php_rush');