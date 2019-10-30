<?php
require('dbcon.php');
$userid=$_REQUEST['userid'];
$query = "DELETE FROM student WHERE userid='$userid'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
echo '<script LANGUAGE="JavaScript">
            alert("Username :('.$POST[username].') Deleted!")
            window.location.href="admintest.php";
            </script>';
header("Location: admintest.php"); 
?>