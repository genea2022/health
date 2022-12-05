

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GET HEALTH</title>
        
         
        
        <link rel="stylesheet" href="style2.css">
       
    </head>
    
    <body id="page-top">
    <div class="all_1"  >
                 <?php
                 
                 
             include('config.php');
             $ID=$_GET['id'];
             $up = mysqli_query($con, "select * from informationlist where id =$ID" );
             $data = mysqli_fetch_array($up);


                 ?>
                 
   
   <div class="contaner">
    <div class="had" >
    <h2 id="covd" style='color:#0c2461;'>Get Health </h2>
    <h6 id="best" style='color:#222f3e;'>best place for health</h6>
     <B class="eng" onclick="show_hide()" id="ENG">ENG </B>
    <img class="flgeng" id="icoeng" src="united-states.jpg"> 
    <B class="eng" onclick="show_hide()" id="ARB" style="display:none ;">ARB </B>
    <img class="flgeng" id="icoarb" src="Emirates.svg.webp" style="display:none ;">
</div>
    
    <img id="imge" src="<?php echo $data['image'] ?>" >
    <div class="ferinfo" id="ferinfo" >
        <h3 id="name" style='color:#353b48;'> <b><?php echo $data['lastname'] ?> &nbsp<?php echo $data['frstname'] ?> &nbsp<?php echo $data['fathname'] ?></b> </h3> 
           <h3 id="birth">Daet Of Birth: <b style='color:#353b48;'><?php echo $data['birth'] ?></b> </h3>
            
           <h3 id="paspr">Passport serial <span >&#8470;</span>: <b style='color:#353b48;'><?php echo $data['passport'] ?></b></h3>
           <h3 id="paspr">Country: <b style='color:#353b48;'><?php echo $data['contry'] ?></b></h3> 
    </div>
    <!--================================== -->
    <div class="ferinfo" id="ferinfo1" style="display:none ;">
        <h3 id="name"> <b><?php echo $data['arb1'] ?> &nbsp<?php echo $data['arb2'] ?> &nbsp<?php echo $data['arb3'] ?></b> </h3> 
           <h3 id="birth"><b><?php echo $data['birth'] ?> :تاريخ الميلاد</b> </h3>
            
           <h3 id="paspr"><b><?php echo $data['passport'] ?> :<span>&#8470;</span>جواز السفر</b></h3>
           <h3 id="paspr"><b><?php echo $data['contry'] ?> :البلد</b></h3> 
    </div>
    <!--================================== -->

    <!--==========secrbt====================== -->

    <script>
        var a;
        
function show_hide()
{
    if(a==1)
    {
      document.getElementById("ferinfo").style.display="inline"
        document.getElementById("icoeng").style.display="inline"
        document.getElementById("ENG").style.display="inline"
        document.getElementById("ferinfo1").style.display="none"
        document.getElementById("icoarb").style.display="none"
        document.getElementById("ARB").style.display="none"
        return a=0;
       
    }
    else
    {
        document.getElementById("ferinfo").style.display="none"
        document.getElementById("icoeng").style.display="none"
        document.getElementById("ENG").style.display="none"
        document.getElementById("ferinfo1").style.display="inline"
        document.getElementById("icoarb").style.display="inline"
        document.getElementById("ARB").style.display="inline"
        return a=1;
    }
    
}
    </script>


    <!--================================== -->

      <center>
    <div class="info">
          
          
           
           <div class="infgren">  
            <center> 
            <h3 id="by">Document For International Movement</h3>    
                <h3>COVID-19 Vaccination Complete</h3>             
          <h3 id="red"> <b> <span>&#8470;</span> 0000<?php echo $data['nocert'] ?></b> </h3> 
            
           
           <h3 id="tim1">Valid Until: <b><?php echo $data['tim1'] ?></b> </h3> 
           
           </div> 
            
         

<div class="opshinfo">
           <div class="language-picker js-language-picker">
  <form action="" class="language-picker__form">
    <label for="language-picker-select"></label>
    <img id="ico" src="syringe.png" >
    <select id="select" name="language-picker-select" id="language-picker-select"  >
    <option value="volvo" disabled>Not Exist !</option>
    <option value="saab">other tests</option>
       </select>
  </form>
</div>
<div class="language-picker js-language-picker">
  <form action="" class="language-picker__form">
    <label for="language-picker-select"></label>
    <img id="ico" src="medical-history.png" >
    <select id="select" name="language-picker-select" id="language-picker-select"  >
    <option value="volvo" disabled>Not Exist !</option>
    <option value="saab">case report</option>
       </select>
  </form>
</div>
<div class="language-picker js-language-picker">
  <form action="" class="language-picker__form">
    <label for="language-picker-select"></label>
    <img id="ico" src="menu.png" >
    <select id="select" name="language-picker-select" id="language-picker-select"  >
    <option value="volvo" disabled>There are others !</option>
      <option value="saab">Helpful Resources</option>
    <option value="volvo" >Veklury</option>
    <option value="volvo" >Immune-based therapy</option>
    <option value="volvo" >Ivermectin</option>
  
    
       </select>

       <button id="clos3" type="submit" ><a href="info.html"> Must read information !</button>
  </form>
   
  <div class="text"><h4 id="tex"><a href="#/"> Avoid crowds and close contact! Wear a properly fitted mask when physical distancing is not possible and in poorly ventilated settings!</h4></div>
    <button id="clos" type="submit" onclick="show_hide2()" >Check the code</button>
    <button id="clos1" type="submit" onclick="outwepsate()"> CLOS</button>
    
    

</div>
<!--============================-->





<div class="maseg"  id="idmaseg"  style="display:none ;">


  <h4 id="htext"> <div class="loadingio-spinner-eclipse-dg3zfoo3hc9"><div class="ldio-9mdjfrwzinm">
 
 
  <div></div>
</div></div>
<style type="text/css">
@keyframes ldio-9mdjfrwzinm {
  0% { transform: rotate(0deg) }
  50% { transform: rotate(180deg) }
  100% { transform: rotate(360deg) }
}
.ldio-9mdjfrwzinm div {
  position: absolute;
  animation: ldio-9mdjfrwzinm 0.63s linear infinite;
  width: 50px;
  height: 50px;
  top: 25px;
  left: 25px;
  border-radius: 50%;
  box-shadow: 0 1.3px 0 0 #000000;
  transform-origin: 25px 25.65px;
}
.loadingio-spinner-eclipse-dg3zfoo3hc9 {
  width: 88px;
  height: 88px;
  display: inline-block;
  overflow: hidden;
  background: #f1f2f3;
}
.ldio-9mdjfrwzinm {
  width: 100%;
  height: 100%;
  position: relative;
  transform: translateZ(0) scale(0.88);
  backface-visibility: hidden;
  transform-origin: 0 0; /* see note above */
}
.ldio-9mdjfrwzinm div { box-sizing: content-box; }
/* generated by https://loading.io/ */
</style>



<br> Please Wait .<br> The information is being verified</h4>

  <button id="butimg" type="submit"  onclick="hideinfobox()">OK</button>
  
</div>

<script>

  function changetext(){
    document.getElementById('htext').innerHTML='<h1 id="immas">✅ </h1> The information has been verified.COVID-19 Vaccination Complete (2 of2) ';
  }
   setTimeout(changetext, 9000);


        var b;
function show_hide2()
{
    if(b==1)
    {

      document.getElementById("idmaseg").style.display="inline"
      document.getElementById("idmaseg").style.display="none"
      document.getElementById("clos").style.display="inline"
      return b=0;
    }
    else
    {
       
        document.getElementById("idmaseg").style.display="none"
        document.getElementById("idmaseg").style.display="inline"
        document.getElementById("clos").style.display="none"
        return b=1;
    }
}

function hideinfobox()
{
  document.getElementById("idmaseg").style.display="none"
}

function outwepsate()
{
  window.location.href = 'https://www.worldometers.info/coronavirus/';
}
    </script>





<!--============================-->

</center>  
</div>
    </div>
    
     </center>
    
    </div>
   </div>   
        
        
        </form>
        </div>
       <!-- ===========================================================-->
      
    </body>
    
</center>
</html>
