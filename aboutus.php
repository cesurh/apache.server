<?php

session_start();



?>


<!doctype html>
<html lang="tr" dir="TR">
    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="icon" href="aicon1.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>About Us</title>
<style type="text/css">
            body{
                color: grey;
            }
        
            ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    border-radius: 100px;
    overflow: hidden;
    background-color: #34495e;
}

li {
    display:inline-block;
    text-align: center;
    
}

li a {
    display: block;
    color: white;
    text-align: center;
    transition:all .3s ease-in;
    padding: 20px 30px;
    text-decoration: none;
}

li a:hover{
    background-color:#f39c12; 
}

ul li ul {
    background-color:#2c3e50;
    display:none;
    text-align: center;
    position:absolute;
    width:60px
}

ul li:hover ul{
    display:block;
}
li ul li {
    display:block; 
}
#footer {
	height: 60px;
	background: #3A3A3A;
    border-radius: 5px;
    line-height: normal;
}
 
#footer p {
    text-align: center;
	margin: 0;
	padding-top: 18px;
	line-height: normal;
	text-align: center;
	text-transform: capitalize;
	font-family: 'Abel', sans-serif;
	font-size: 16px;
	color: #A4B890;
}
 
#footer a {
	text-decoration: underline;
	color: #70C964;
}
#aero {
    background-color: #B0E0E6;
}
 
        </style><div id="aero" ><center>
<img src="rbglogo.png" style="float: left;"  class="animate__animated animate__bounce" alt="Logo" />
</center>
<br>
<br>
<br>

<center>
<div  style="float: ;, widht: 600px; height: 60px; text-size: 20px;>"
<div class="btn-group" style="border-radius: 40px; " name="grup"  role="group" aria-label="Basic outlined example">
  <button type="button" name="Astronomi" onClick="parent.location='home.php'" style="border-radius: 40px;" class="btn btn-outline-danger"><img class="tamam"   src="home (1).png" style=" hover-color: red; widht: 25px; height: 27px;" id="tamam" alt="profile" /> Home</button>
  <button type="button" name="Yaazılım" style="color: blue; border-radius: 90px;" class="btn btn-outline-info"><img class="tamam"   src="bize.png" style=" hover-color: red; widht: 25px; height: 28px;" id="tamam" alt="profile" /> Join Us</button>
  <button type="button" name="Coğrafya" style="color: red; border-radius: 90px;" class="btn btn-outline-warning"><img class="tamam"   src="edit.png" style=" hover-color: red; widht: 25px; height: 27px;" id="tamam" alt="profile" /> Projects</button>
  <button type="button" name="Felsefe" style="color: orange; border-radius: 90px;" class="btn btn-outline-success"><img class="tamam"   src="hdf.png" style=" hover-color: red; widht: 25px; height: 27px;" id="tamam" alt="profile" /> Our Goals</button>
  <?php  if(isset($_SESSION["username"]))
{
    echo "";
}
else
{
    echo "<a type='button' name='Fizik' style='border-radius: 90px; float: center;' href='kayit.php' class='btn btn-outline-success'>Kayıt Ol</a>

";
}
?>
  
  
<?php  if(isset($_SESSION["username"]))
{
    echo "<center><a type='button' style='border-radius: 90px; widht: 65px; float: center;' href='profil.php' class='btn btn-outline-secondary'><h3>".$_SESSION["username"]."</h3></a>";
}
else
{
    echo "<a type='button' style='border-radius: 90px; float: center;'   href='login.php' class='btn btn-outline-primary'>Giriş Yap</a>"; # istersen eklersin
}
?></div>
</div>
</center>
</div>
<style>
    #box {
max-width: 950px;
position: relative;
float: center;

}
#box .fa-search {
position: absolute;
top: 14px;
left: 12px;
font-size: 20px;
color:cornflowerblue;
}
#search {
width: 949px;
box-sizing: border-box;
border: 2px solid cornflowerblue;
border-radius: 40px;
font-size:18px;
padding: 12px 20px 12px 40px;
-moz-transition: width 0.4s ease-out-in;
-o-transition: width 0.4s ease-out-in;
-webkit-transition: width 0.4s ease-in-out;
transition: width 0.4s ease-in-out;
}
#search:focus {
width: 100%;
}
i {
    float: right;
    -moz-transition: width 0.4s ease-out-in;
-o-transition: width 0.4s ease-out-in;
-webkit-transition: width 0.4s ease-in-out;
transition: width 0.4s ease-in-out;
}
#abcd {
    background-color: lightgreen; 
    color: ; 
    
    width: 900px;
    height: 400;  
    border-radius: 20px;  
    text-align: center;

}

</style>
<br>
<br>
<br>
<center><header><h1 class="animate__animated animate__fadeInUp">About Us</h1></header></center>
<br>
<center>
<form>
   <div style="float: center;" id="box">
       <input type="text" id="search"  placeholder="Ara..">
       <i  class="fa fa-search"></i>
   </div>
</form>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center>
            
      <div style="background-color: lightblue; lightblue; box-shadow: 2px 5px 3px limegreen; font-color: white;" class="card p 9 " id="footer1" align="center">
        <p>2022. TheStudent. ©All rights reserved. Created by <a href="https://github.com/cesurh?"  target=”_blank”  rel="nofollow">Cesur Huseynzade</a>.</p>
    </div>
</center>