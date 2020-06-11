<?php

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "katherine", "pwd" => "Tp046963", "Database" => "ddacdbtp046963", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ddactp046963.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
 
 if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection Success: connected!";
?>
