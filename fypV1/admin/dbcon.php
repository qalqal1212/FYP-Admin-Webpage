<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$host ="localhost";
$user ="root";
$password ="";
$db ="wallet";

$con = mysqli_connect($host, $user, $password, $db);
if(mysqli_connect_errno())
{
  echo 'Failed Connection:'.mysqli_connect_error();
}
else {
}
error_reporting(0);

?>