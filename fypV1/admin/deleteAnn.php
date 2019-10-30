<?php
include "dbcon.php";
$annID=$_REQUEST['annID'];
$query = "DELETE FROM ann WHERE annID='$annID'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
echo '<script LANGUAGE="JavaScript">
            alert("AnnID :('.$POST[annID].') Deleted!")
            window.location.href="viewAnn.php";
            </script>';
header("Location: viewAnn.php"); 
?>