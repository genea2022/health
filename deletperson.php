<?php

 include ('config.php');
 $ID = $_GET['id'];
 mysqli_query($con, "DELETE FROM informationlist WHERE id=$ID");
 header('location:all_person.php');
?>