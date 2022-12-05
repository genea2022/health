


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>all-products</title>
    <link rel="stylesheet" href="style.css">

    <style>
        h3{
            font-weight:bold;
        }
        .card{
            float:right;
            margin-top:20px;
            margin-left:10px;
            margin-right:10px;
        }
        .card img{
            width:100%;
            height:200px;
        }
        main{
            width:60%;
        }

    </style>
</head>
<body>
<center>
<h3> all prodect we have </h3>
</center>

<?php
 include('config.php');
 $result = mysqli_query($con , "SELECT * FROM informationlist");
 while($row=mysqli_fetch_array($result))
 {
        echo "
        <center>
                <main>
                    <div class='card' style='width: 15rem;'>
                    <img src='$row[image] ' class='card-img-top'  >
                        <div class='card-body'>
                            <h5  class='card-title'> id $row[id]</h5>
                            <h5  class='card-title'> Cert <span>&#8470;</span> $row[nocert]</h5>
                            <p class='card-text'> contry/ $row[contry]</p>
                            <p class='card-text'> ferst name/ $row[frstname]</p>
                            <p class='card-text'> bab name/ $row[fathname]</p>
                            <p class='card-text'> lest name/ $row[lastname]</p>
                            <p class='card-text'> arb1/ $row[arb1]</p>
                            <p class='card-text'> arb2/ $row[arb2]</p>
                            <p class='card-text'> arb3/ $row[arb3]</p>
                            <p class='card-text'> numr/ ducymnt $row[passport]</p>
                            <p class='card-text'> deat birth/ $row[birth]</p>
                            <p class='card-text'> emael/ $row[email]</p>
                            <p class='card-text'> numr phon/ $row[phone]</p>
                            <p class='card-text'> tieme 1/ $row[tim1]</p>
                            <p class='card-text'> time 2/  $row[tim2]</p>
                            <p class='card-text'> tiem regtreshn/ $row[dt]</p>
                            <a href='deletperson.php? id=$row[id]' class='btn btn-danger'>حذف منتج</a>
                            <a href='updateinfo.php? id=$row[id]' class='btn btn-primary'>تعديل منتج</a>
                            <a href='updateinfo2.php? id=$row[id]' class='btn btn-primary'>تصدير الرمز</a>
                        </div>
                    </div>
                </main>
            <center>
        
        ";
            
           
 };
?>




</body>
</html>