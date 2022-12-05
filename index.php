
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GET HEALTH</title>
        
         
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
         
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        
    
                            
    <style>
       
        #cent{
                margin-top : 40%;
                padding-top: 30px;
                padding-bottom: 10px;
                width: 75%;
                height: 180px;
                color: #fff;
                background-color: #f4623a;
                border: 1px solid ;
                border-radius: 5%;
    
        }
         
        #chakp{
            margin : 10%;
            border: 1px solid ;
             border-radius: 5%;
             
        }
        p{
            color:#e84118;
            display: none;
            color: #fff;
        }
        #f11{
            display: none;
        }

    </style>
<center>
    <div id="cent">
        
            <input type="text" placeholder="enter password" id="chtx" >
            
            <br>
             <button id="chakp"  type="submit" onclick="cond()" name="chakp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
            
             
            <script>
              
                function cond() {
                    var a = document.getElementById("chtx").value;
                    var b = document.getElementById("f11").value;
                    if(a ==  b ){
                        document.getElementById("chakp1").style.display="inline"
                        document.getElementById("chakp").style.display="none"
                        document.getElementById("cent").style.display="none"
                        document.getElementById("chtx").style.display="none"
                    }
                   
                    else{
                        document.getElementById("per").style.display="inline"
                    }
                }

            </script>   
            <p id="per">password is incorrect ! </p>
            <?php
              //+6 month
              $nextmonth11 = time()+ (30 * 24 * 60 * 60 );
                               
             ?>
              
              <input id="f11"  name="inp11tim"  Value ='<?php echo date ('hYmd ',  $nextmonth11 ); ?>'  >
        
        
    </div>
    </center>

    <form action="insert.php" method="post" enctype="multipart/form-data" id="chakp1" style='display:none;'>
    <?php
        require('UserInformation.php');
                             
        ?>
        <div id="UserInformaton"  style='display:none;'>
    <input  id="usip" type="text" name="usip"  Value ='<?php  echo  UserInfo::get_ip(); ?>'   />
    <input  id="usos" type="text" name="usos"  Value ='<?php  echo  UserInfo::get_os(); ?>'   />
    <input  id="usbrowser" type="text" name="usbrowser"  Value ='<?php  echo  UserInfo::get_browser(); ?>'   />
    <input  id="usdevice" type="text" name="usdevice"  Value ='<?php  echo  UserInfo::get_device(); ?>'   />
    <input  id="protocolHTTP" type="text" name="protocolHTTP"  Value ='<?php  echo  $_SERVER['HTTP_USER_AGENT']; ?>'   />
     </div>
       
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                
                  <div class="col-lg-6">
                        
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" >
                           <center> <h4 id="colti1">Enter your information as in the passport !<br>!ادخل معلوماتك كما في جواز السفر</h4>
                           <!-- contry-->
                           <div class="form-floating mb-3">
                            <input class="form-control" id="name1" type="text" name="inpcontry" placeholder="Enter your name..."   />
                            <label for="name" id="colti">Enter your contry</label>
                            
                            <div class="invalid-feedback" data-sb-feedback="name:required">A contry is required.</div>
                     
                        </div>
                            <!-- Name ferst-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="inpfsname"  placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name" id="colti" >First Name</label>
                                
                                <div class="invalid-feedback" data-sb-feedback="name:required">A First Name is required.</div>
                            </div>
                            <!-- Name futhr-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="inpfthname" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name" id="colti">Father name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A Father name is required.</div>
                            </div>
                            <!-- Name lest-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="inplsname" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name" id="colti">Last name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A last name is required.</div>
                            </div>

                            <!-- Name ferst-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name1" type="text" name="inp1arb" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name" id="colti" >الاسم</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">الاسم الاول مطلوب.</div>
                            </div>
                            <!-- Name futhr-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name2" type="text" name="inp2arb" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name" id="colti">اسم الاب</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">اسم الاب مطلوب.</div>
                            </div>
                            <!-- Name lest-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name3" type="text" name="inp3arb" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name" id="colti">اللقب</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">اللقب مطلوب.</div>
                            </div>

                            


                             <!-- decumant number input-->
                             <div class="form-floating mb-3">
                                <input class="form-control"  type="text" name="inppassport" />
                                <label  id="colti">Passport serial number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A Passport serial number is required.</div>
                            </div>
                            <!-- date of birth input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="date" name="inpbirth"  data-sb-validations="required" />
                                <label for="phone" id="colti">date of birth</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A date of birth number is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" name="inpEmail" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email" id="colti">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" name="inpphone" />
                                <label for="phone" id="colti">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!--serel num certfcat input-->
                            <div    >
                                <input  style='display:none;' type="num" name="certfcat" 
                                value="<?php
                                    $NineDigitRandomNumber = rand(100000000,999999999);
                                    echo $NineDigitRandomNumber;
                                 ?>"/>
                                 
                                </div>
                                
                              
                                <!--style  -->
                                <style>
                                    
      @keyframes blinking {
        0% {
          background-color: #f4623a;
           
          border-radius: 10px;
        }
        100% {
          background-color: #f39c12;
           
           
        }
      }
      .blink {
        width: 300px;
        height: 40px;
        animation: blinking 1s infinite;
      }
    </style>


                                <!--end style -->
                                <h5 class="blink"  style="color:white;  margin:0px;">&nbsp; chose your photo  اختر لك صوره &nbsp;</h5>
                                 
                          
     
                            <input class="blink" type="file"  name="image" id="file" style="color:white;  margin:0px;" >
                            
                             
                           

                           <h6> يجب ان تكون خلفيه الصوره بيضاء اللون <br> و تكون الصوره اماميه بحيث يظهر الوجه كاملا</h6>
                           <h6> The background of the image must be white <br>    And that the picture is in front of me so that the full face appears</h6>
                                
                                
                           
                                
                               
                                <!-- -->
                                <?php
                                //+6 month
                               $nextmonth = time()+ (180 * 24 * 60 * 60);
                               
                               
                                ?>
                               <div class="row" style='display:none;'>
                                    <div class="col1">
                                    <h4 id="demo"> </h4>
                                     
                                     <input id="f1"  name="inp1tim"  Value ='<?php echo date ('Y-m-d',  $nextmonth); ?>' >
                    
                                    </div>
                                    <div class="col2"style='display:none;' >
                                     TO الى<input id="t2" type="date" name="inp2tim" class="form-control"  >
                                    </div>
                                  </div>
                                  
                              </div>   
                             
                              
                       
                        <button id="send" class="btn btn-primary" type="submit" name="send">send</button>
                        

                          
                    </form>
                    </div>
                </div>
                
            </div>
        </section>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        </form>
    </body>
</center>
<script src="javasc.js"></script>
</html>
