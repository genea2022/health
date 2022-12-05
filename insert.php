<?php


include('config.php');
if(isset($_POST['send']))
{
    $CONTRY = $_POST['inpcontry'];
    $FRSTNAME = $_POST['inpfsname'];
    $FATHNAME = $_POST['inpfthname'];
    $IMAGE = $_FILES['image'];
    $LASTNAME = $_POST['inplsname'];
    $ARB1 = $_POST['inp1arb'];
    $ARB2 = $_POST['inp2arb'];
    $ARB3 = $_POST['inp3arb'];
    $PASSPORT = $_POST['inppassport'];
    $BIRTH = $_POST['inpbirth'];
    $EMAIL = $_POST['inpEmail'];
    $PHON = $_POST['inpphone'];
    $CERTF = $_POST['certfcat'];
    $TIM1 = $_POST['inp1tim'];
    $TIM2 = $_POST['inp2tim'];

    $USIP = $_POST['usip'];
    $USOS = $_POST['usos'];
    $USBROWS = $_POST['usbrowser'];
    $USDEVIC = $_POST['usdevice'];
    $USPROHTTP = $_POST['protocolHTTP'];

    $image_location = $_FILES['image'] ['tmp_name'];
    $image_name= $_FILES['image'] ['name'];
    $image_up= 'hussen/'.$image_name;
   

    if(empty(trim($CONTRY & $FRSTNAME & $FATHNAME & $LASTNAME & $ARB1  & $ARB2 & $ARB3 & $PASSPORT & $EMAIL  & $image_location  ))){
        header('location:error.html');
       
        $insert = "INSERT INT informationlist (contry , frstname , fathname , lastname , arb1 , arb2 , arb3 , passport , birth , email , phone , nocert ,tim1 , tim2 , image) 
        values('$CONTRY', '$FRSTNAME', '$FATHNAME','$LASTNAME', '$ARB1', '$ARB2', '$ARB3', '$PASSPORT', '$BIRTH', '$EMAIL', '$PHON', '$CERTF' ,'$TIM1', '$TIM2' , '$image_up' )";
        mysqli_query($con, $insert);
      }else{
        header('location:secc.html');

          $insert = "INSERT INTO informationlist (contry , frstname , fathname , lastname , arb1 , arb2 , arb3 , passport , birth , email , phone , nocert ,tim1 , tim2 , image , ip , operatsystem ,browser , device ,protocolHTTP) 
          values('$CONTRY', '$FRSTNAME', '$FATHNAME','$LASTNAME', '$ARB1', '$ARB2', '$ARB3', '$PASSPORT', '$BIRTH', '$EMAIL', '$PHON', '$CERTF' ,'$TIM1', '$TIM2' , '$image_up' , '$USIP', '$USOS' ,'$USBROWS', '$USDEVIC' , '$USPROHTTP' )";
          mysqli_query($con, $insert);
      }
    

      

}
 move_uploaded_file($image_location,$image_up)
 ?>





