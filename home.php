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
    <title>Home</title>
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
 
        </style><center>
<img src="rbglogo.png"  class="animate__animated animate__bounce" alt="Logo" />
</center>
<center>
<div  style="float: ;, widht: 600px;>"
<div class="btn-group" style="border-radius: 10px;" name="grup"  role="group" aria-label="Basic outlined example">
  <button type="button" name="Astronom" onClick="parent.location='aboutus.php'" style="border-radius: 90px;" class="btn btn-outline-danger"><img class="tamam"   src="aicon1.png" style=" hover-color: red; widht: 25px; height: 35px;" id="tamam" alt="profile" /> About Us</button>
  <button type="button" name="Yaazılım"  onClick="parent.location='https://forms.gle/XezUfP4XymNad8uS6'"style="color: blue; border-radius: 90px;" class="btn btn-outline-info"><img class="tamam"   src="bize.png" style=" hover-color: red; widht: 25px; height: 25px;" id="tamam" alt="profile" /> Join Us</button>
  <button type="button" name="Coğrafya" style="color: red; border-radius: 90px;" class="btn btn-outline-warning"><img class="tamam"   src="edit.png" style=" hover-color: red; widht: 25px; height: 25px;" id="tamam" alt="profile" /> Projects</button>
  <button type="button" name="Felsefe" style="color: orange; border-radius: 90px;" class="btn btn-outline-success"><img class="tamam"   src="hdf.png" style=" hover-color: red; widht: 25px; height: 25px;" id="tamam" alt="profile" /> Our Goals</button>
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
    echo "<center><a type='button' style='border-radius: 90px; float: center;'' href='profil.php' class='btn btn-outline-secondary'><h5>".$_SESSION["username"]."</h5></a>";
}
else
{
    echo "<a type='button' style='border-radius: 90px; float: center;''   href='login.php' class='btn btn-outline-primary'>Giriş Yap</a>"; # istersen eklersin
}
?></div>
</div>
</center>

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
</div>

<div style="float: ;>"
<div class="" name="grup"  role="group" aria-label="Basic outlined example">
<button type="button" name="Yaazılım" onclick="gizleGoster('yazılım');" style="color: blue;" class="btn btn-outline-info">Yazılım
  <style>
  .onyuz
{
    position: relative;
    border-radius: 35px;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    -moz-transform: scale(1);
    transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
    -ms-transition: all .3s ease-in;
}
.onyuz:hover
{
    z-index: index 1;;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);  
    -moz-transform: scale(1.1);
    transform: scale(1.1);
}
</style> <center> <h4>Yazılım</h4>
    <img src="astron.jpeg" style="width: 170px; height: 120px;"  class="onyuz">
    
 
  </button>
<script>
function gizleGoster(ID) {
  var secilenID = document.getElementById(ID);
  if (secilenID.style.display == "none") {
    secilenID.style.display = "";
  } else {
    secilenID.style.display = "none";
  }
}
</script>

<p id="yazılım" style="display: none;"  >
  <option   disabled selected >Yazılım</option>
  <a id='' type='button' name='Matematik' class='btn btn-outline-primary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
  <br>
  <a id='' type='button' name='Matematik' class='btn btn-outline-secondary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
</p>

<button type="button" name="Yaazılım" onclick="gizleGoster('astron');" style="" class="btn btn-outline-danger">Astronomi
  <style>
  .onyuz
{
    position: relative;
    border-radius: 35px;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    -moz-transform: scale(1);
    transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
    -ms-transition: all .3s ease-in;
}
.onyuz:hover
{
    z-index: index 1;;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);  
    -moz-transform: scale(1.1);
    transform: scale(1.1);
}

</style> <center> <h4>Astronomi</h4>
    <img src="astron.jpeg" style="width: 170px; height: 120px;"  class="onyuz">
    
 
  </button>
<script>
function gizleGoster(ID) {
  var secilenID = document.getElementById(ID);
  if (secilenID.style.display == "none") {
    secilenID.style.display = "";
  } else {
    secilenID.style.display = "none";
  }
}
</script>

<p id="astron" style="display: none;"  >
  <option   disabled selected >Astronomi</option>
  <a id='' type='button' name='Matematik' class='btn btn-outline-primary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
  <br>
  <a id='' type='button' name='Matematik' class='btn btn-outline-secondary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
</p>
</center>
</center>
</div>
</div>
<br><br>
<center>
<div id="abcd" style="background-color: lightgreen; color: ; width: 900px; height: 300; border-radius: 25px;  text-align: center;">

<h1 style="color: #f32742;">Okullar</h1>







</div>
</center>








<br><br><br><br><br><br>



<center>
            
      <div style="background-color: lightblue; lightblue; box-shadow: 2px 5px 3px limegreen; font-color: white;" class="card p 9 " id="footer1" align="center">
        <p>2023. TheStudent. ©All rights reserved. Created by <a href="https://github.com/cesurh?" rel="nofollow">Cesur Huseynzade</a>.</p>
    </div>
</center>
            
