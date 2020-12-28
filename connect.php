<?php
$db_host = "localhost";               // Database Host
$db_user = "root";                    // Database User
$db_pass = "password";                        // Database Password
$db_name = "dbms"; // Database Name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); // Connect to Database
if(!$conn) // Check connection
{
  die("Connection failed: " . mysqli_connect_error()); // Display error if not connected
}
?>