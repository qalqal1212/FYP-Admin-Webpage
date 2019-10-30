<?php
include 'dbcon.php';
$g=$_GET['sender'];
if($g=='edit3') {
    mysqli_query($con, "UPDATE student INNER JOIN student_detail ON student.userid = student_detail.userid
    SET
        student.email = '$_POST[email]',
        student.password = $_POST[password],
        student_detail.fname = $_POST[fname],
        student_detail.lname = $_POST[lname],
        student_detail.noIC = $_POST[noIC]
        
        WHERE student.userid =$_REQUEST[userid]");

    echo '<script LANGUAGE="JavaScript">
            alert("Name ('.$_POST[fname].') Updated!")
            window.location.href="admintest.php";
            </script>';
  } else 
    if($g=='delete') {
    mysqli_query($con, "DELETE FROM student WHERE userid='$_GET[userid]'");
    echo '<script LANGUAGE="JavaScript">
            alert("Username :('.$POST[username].') Deleted!")
            window.location.href="adminhomepage.php";
            </script>';
  } else 
  if($g=='edit2') {
        mysqli_query($con, "UPDATE ann SET annTitle='$_POST[annTitle]', annDesc='$_POST[annDesc]' WHERE annID='$_REQUEST[annID]'");
        echo '<script LANGUAGE="JavaScript">
                alert("Announcement ('.$_POST[annID].') Updated!")
                window.location.href="viewAnn.php";
                </script>';
      }
