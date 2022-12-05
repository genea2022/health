

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
                 <?php
             include('config.php');
             $ID=$_GET['id'];
             $up = mysqli_query($con, "select * from informationlist where id =$ID" );
             $data = mysqli_fetch_array($up);


                 ?>
    <form action="insert.php" method="post" enctype="multipart/form-data">
       
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                           <center> <h4 id="colti1">Enter your information as in the passport !<br>!ادخل معلوماتك كما في جواز السفر</h4>
                           <input type="text" name="id"  value='<?php echo $data['id'] ?>'   >
                           
                             
                           <!-- contry-->
                           <div class="form-floating mb-3">
                            <input class="form-control" id="name1" type="text" name="inpcontry" value='<?php echo $data['contry'] ?>'  />
                            <label for="name" id="colti">Enter your contry</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A contry is required.</div>
                        </div>
                            <!-- Name ferst-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="inpfsname" value='<?php echo $data['frstname'] ?>' />
                                <label for="name" id="colti" >First Name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A First Name is required.</div>
                            </div>
                            <!-- Name futhr-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="inpfthname" value='<?php echo $data['fathname'] ?>' />
                                <label for="name" id="colti">Father name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A Father name is required.</div>
                            </div>
                            <!-- Name lest-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="inplsname" value='<?php echo $data['lastname'] ?>' />
                                <label for="name" id="colti">Last name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A last name is required.</div>
                            </div>

                            <!-- Name ferst-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name1" type="text" name="inp1arb" value='<?php echo $data['arb1'] ?>' />
                                <label for="name" id="colti" >الاسم</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">الاسم الاول مطلوب.</div>
                            </div>
                            <!-- Name futhr-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name2" type="text" name="inp2arb" value='<?php echo $data['arb2'] ?>' />
                                <label for="name" id="colti">اسم الاب</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">اسم الاب مطلوب.</div>
                            </div>
                            <!-- Name lest-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name3" type="text" name="inp3arb" value='<?php echo $data['arb3'] ?>' />
                                <label for="name" id="colti">اللقب</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">اللقب مطلوب.</div>
                            </div>

                             <!-- decumant number input-->
                             <div class="form-floating mb-3">
                                <input class="form-control"  type="text" name="inppassport" value='<?php echo $data['passport'] ?>' />
                                <label  id="colti">Passport serial number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A Passport serial number is required.</div>
                            </div>
                            <!-- date of birth input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="date" name="inpbirth"  value='<?php echo $data['birth'] ?>' />
                                <label for="phone" id="colti">date of birth</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A date of birth number is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" name="inpEmail" value='<?php echo $data['email'] ?>' />
                                <label for="email" id="colti">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" name="inpphone"  value='<?php echo $data['phone'] ?>'/>
                                <label for="phone" id="colti">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!--serel num certfcat input-->
                            <div >
                                <input  type="num" name="certfcat" 
                                value="<?php
                                    $NineDigitRandomNumber = rand(100000000,999999999);
                                    echo $NineDigitRandomNumber;
                                 ?>"/>
                                 
                                </div>
                            <input type="file" value="chose file" name="image" id="file" style='display:none;' >
                            <label for="file">upload image </label>

                           <center><h5 id="but" class="input-group-text"> last time you were out of the country <br>
                                    اخر مره كنت فيها خارج البلد
                           </h5> </center>
                                
                                
                                
                                
                               
                                
                               <div class="row">
                                    <div class="col1">
                                    FOR من <input id="f1" type="date" name="inp1tim" class="form-control"  value='<?php echo $data['tim1'] ?>' >
                    
                                    </div>
                                    <div class="col2">
                                     TO الى<input id="t2" type="date" name="inp2tim" class="form-control" value='<?php echo $data['tim2'] ?>' >
                                    </div>
                                  </div>
                                
                              </div>   
                            
                       <!-- Submit Button
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit" name="send">Submit</button></div>
                       --> 
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
</html>
