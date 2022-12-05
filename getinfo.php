<?php
include('config.php');

if(isset($_POST['done']))
{
    $VINP1 = $_POST['inp1'];
    $VINP2 = $_POST['inp2'];
    $VINP3 = $_POST['inp3'];
    $VINP4 = $_POST['inp4'];
    $VINP5 = $_POST['inp5'];
    $VINP6 = $_POST['inp6'];
    $VINP7 = $_POST['inp7'];
    $VINP8 = $_POST['inp8'];
    $VINP9 = $_POST['inp9'];
    $VINP10 = $_POST['inp10'];
    $VINP11 = $_POST['inp11'];
    $VIMG_L = $_FILES['filimg'] ['tmp_name'];
    $VIMG_N = $_FILES['filimg'] ['name'];
    $VIMG_U = 'HUSSEN/' .$VIMG_N;

    $going = "INSERT INTO informationlist (contry , frstname , fathname , lastname , arb1 , arb2 , arb3 , passport , birth , email , phone , image)
    values('$VINP1','$VINP2','$VINP3','$VINP4','$VINP5','$VINP6','$VINP7','$VINP8','$VINP9','$VINP10','$VINP11','$VIMG_U')";
    mysqli_query($con, $going);
}


?>