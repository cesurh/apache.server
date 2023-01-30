<?php

session_start();

$mate=($_POST["$matei"]);

if(isset($_SESSION["username"]))
{
    
}
else
{
    echo "<div class='alert alert-Danger' role='alert'><center><h3>
    Bu sayfayı görüntülemek için giriş yapmanız gerekemektedir
  </h3></center></div>";
}


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
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Welcome</title>

    
    <style>
    body {
    margin: 0;
    color: grey;
}

ul {
    list-style-type: none;

    margin: 0;

    padding: 0;

    width: 13%;

    background-color: #f1f1f1;

    position: fixed;

    height: 100%;

    overflow: auto;
}

li a {
    display: block;

    color: #000;

    padding: 8px 16px;

    text-decoration: none;
}

li a.active:hover:not(.active) {
    background-color: green;
    height: 55px;
    border: 5px;
    color: white;
    
}

li a:hover:not(.active) {
    background-color: grey;
    border-radius: 35px;
    text-shadow: 5px;

    color: white;
}

.tamam {
  background-color: ;
  float:left;
  weight:40px;
  height:40px;
}
.send {
  float:left;
  weight:140px;
  height:60px;

} 
#box {
max-width: 950px;
position: relative;

}
#box .fa-search {
position: absolute;
top: 14px;
left: 12px;
font-size: 20px;
color:cornflowerblue;
}
#search {
width: 950px;
box-sizing: border-box;
border: 2px solid cornflowerblue;
border-radius: 25px;
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
#footer1 {

}
#op1 {
  


}
#tamam :hover {
  background-color: green;



}
   
   </style>

   



  </head>
  
  <header style="background-color: lightgrey;">
  <body  style="background-color: lightgrey;">
  

  
  <ul>
  <img src="rbglogo.png" class="send" alt="Logo" />
  <br><br>
<br>
  <li ><a class="active" style="weight: 35px;" href="profile.php">  <img class="tamam"  src="aicon1.png" id="tamam" alt="profile" /><h3>Profile</h3></a></li>
  <br>
  
  <li ><a class="" href="home.php"><img class="tamam"   src="home (1).png" style="widht: 25px; height: 30px;" id="tamam" alt="profile" /><h5>Home</h5></a></li>
<br>
  <li ><a class="" href="home.php"><img class="tamam"   src="megap.png" style="widht: 25px; height: 30px;" id="tamam" alt="profile" /><h5>News</h5></a></li>

  <br>
  <li ><a class="" href="home.php"><img class="tamam"   src="sss.png" style="widht: 25px; height: 30px;" id="tamam" alt="profile" /><h5>SSS</h5></a></li>

  <li ><a class="" onClick="parent.location='aboutus.php'"><img class="tamam"   src="users.png" style=" hover-color: red; widht: 25px; height: 30px;" id="tamam" alt="profile" /><h5>About</h5></a></li>

  <li ><a class="" href="https://forms.gle/XezUfP4XymNad8uS6" target="_blank"><img class="tamam"   src="jobs.png" style=" hover-color: red; widht: 28px; height: 33px;" id="tamam" alt="profile" /><h5>Jobs</h5></a></li>


  <li ><a style="color:red; hover:darkgreen;" onClick="parent.location='cikis.php'">Çıkış yap</a></li>

  <button type="button" name="cikis" onClick="parent.location='cikis.php'" style=' backround-color:yellow; float:center; border:5px solid red; padding:5px 5px;' class="btn btn-outline-danger">Çıkış yap</button>

</ul>
      <br>
      
      
 
<?php
if(isset($_SESSION["username"]))
{

    echo "<center><h1 style='color:limegreen; float:center;' class='animate__animated animate__fadeInDown'>Welcome</h1><h1 style='color:Brown; float:center;' class='animate__animated animate__fadeInUp'>".$_SESSION["username"]."</h1></center>";
    
}
else
{
    echo "Bu sayfayı görüntülemeye yetkiniz yoktur";
}
?> <center>

  <form action="" method="POST">
<div style="float: center;" id="box">
    <input type="text" name="kad" id="search" placeholder="Ara..">
    <i class="fa fa-search"></i>
</div>
</form>

</center>

</header>


<br>
<!– Resimler –>


    <br>
    <br>
<center>
<div style="float: ;>"
<div class="" name="grup"  role="group" aria-label="Basic outlined example">
  <button type="button" id="arey" onclick="gizleGoster('astron');" name="Astronomi" class="btn btn-outline-danger">Astronomi
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
    float: left;
}
.onyuz:hover
{
    z-index: index 1;;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);  
    -moz-transform: scale(1.1);
    transform: scale(1.1);
}
.Astronomi
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
.Astronomi:hover
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
    float: right;
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
    <img src="astron.jpeg" style="width: 170px; height: 120px;" onclick="gizleGoster('yazılım');" class="onyuz">
    
 
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
  <option   disabled selected >Astronomi</option>
  <a id='' type='button' name='Matematik' class='btn btn-outline-primary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
  <br>
  <a id='' type='button' name='Matematik' class='btn btn-outline-secondary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
</p>
</center>
  <button type="button" id="$mate" onclick="gizleGoster('sonuc4');" name="$mate" class="btn btn-outline-primary">Matematik</button>


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







  

  
  
 


  <button type="button" name="Fizik" class="btn btn-outline-success">Fizik</button>
  <button type="button" name="Coğrafya" style="color: red;" class="btn btn-outline-warning">Coğrafya</button>
  <button type="button" name="Felsefe" style="color: orange;" class="btn btn-outline-success">Felsefe</button>
  <button type="button" onclick="gizleGoster('sonuc');" name="Tiyatro" style="color: limegreen;" class="btn btn-outline-danger">Tiyatro</button>
  
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

  
 
 
 
 
 
 
  <button type="button" id="btn1" onclick="gizleGoster('sonuc2');"  name="okitap" style="color: purple;" class="btn btn-outline-secondary">Okunacak Kitaplar</button>
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
  
  
  
  
  <button type="button" id="btn" onclick="gizleGoster('sonuc1');" name="Ofilm" style="color: brown;" class="btn btn-outline-warning">İzlenecek Filmler</button>
 
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

</div><br>
<div class="btn-group" name="grup"  role="group" aria-label="Basic outlined example">
    


<p id="sonuc2" style="display: none;"  >
  <option   disabled selected >Kitap Önerisi</option>
  <a id='' type='button' name='Matematik' class='btn btn-outline-primary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
  <br>
  <br>
  <a id='' type='button' name='Matematik' class='btn btn-outline-secondary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
</p>


<br><br><br>
<p id="sonuc1" style="display: none;"  >
  <option disabled selected >Film Önerisi</option>
  <a id='' type='button' name='Matematik' class='btn btn-outline-primary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
  <br>
  <a id=' type='button' name='Matematik' class='btn btn-outline-secondary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
</p>


<br><br><br>
<p id="sonuc" style="display: none;"  >
  <option disabled selected >Tiyatro</option>
  <a id='' type='button' name='Matematik' class='btn btn-outline-primary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
  <br>
  <a id='' type='button' name='Matematik' class='btn btn-outline-secondary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
</p>


<br><br><br>
<p id="sonuc4" style="display: none;"  >
  <option disabled selected >Matematik</option>
  <a id='' type='button' name='Matematik' class='btn btn-outline-primary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
  <br>
  <a id='' type='button' name='Matematik' class='btn btn-outline-secondary' onClick="parent.location='home.php'" value='hurr' >Tonguç</a>
</p>
</div>

</div>
</center>
<br>
<br>

<center>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title></title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
    body {
    background-color: #4E4E4E;
    text-align: center;         /* make sure IE centers the page too */
}
 
#wrapper {
    width: 900px;
    
    margin: 0 auto;             /* center the page */
    border-radius: ;
}
 
#content {
    background-color: #fff;
    border: 3px solid #000;
    float: left;
    font-family: Arial;
    padding: 20px 30px;
    text-align: left;
    width: 100%;
     height: 100px;               /* fill up the entire div */
    border-radius: 20px;
}
 
#menu {
    float: left;
    border: 1px solid #000;
    border-bottom: none;        /* avoid a double border */
    clear: both;                /* clear:both makes sure the content div doesn't float next to this one but stays under it */
    width:100%;
    height:20px;
    padding: 0 30px;
    background-color: #FFF;
    text-align: left;
    font-size: 85%;
    border-radius: 5px;

}
 
#menu a:hover {
    background-color: pink;
    border-radius: 5px;
}
 
#userbar {
    background-color: #fff;
    float: right;
    width: 250px;
    border-radius: 5px;
}
 
#footer {
    clear: both;
}
 
/* begin table styles */
table {
    border-collapse: collapse;
    width: 100%;
     
}
 
table a {
    color: #000;
}
 
table a:hover {
    color:#373737;
    text-decoration: none;
}
 
th {
    background-color: #B40E1F;
    color: #F0F0F0;
}
 
td {
    padding: 5px;
}
 
/* Begin font styles */
h1, #footer {
    font-family: Arial;
    color: red;
}
 
h3 {margin: 0; padding: 0;}
 
/* Menu styles */
.item {
    background-color: green;
    border: 1px solid #032472;
    color: #FFF;
    font-family: Arial;
    padding: 3px;
    text-decoration: none;
}
 
.leftpart {
    width: 70%;
}
 
.rightpart {
    width: 30%;
}
 
.small {
    font-size: 75%;
    color: #373737;
}
#footer {
    font-size: 65%;
    padding: 3px 0 0 0;
    
}
 
.topic-post {
    height: 100px;
    overflow: auto;
}
 
.post-content {
    padding: 30px;
}
 
textarea {
    width: 500px;
    height: 200px;
}
</style>
</head>
<body>

    <div id="wrapper">
    <div id="menu">
    
        
        <a class="item" href="/forum/create_topic.php">Create a topic</a> -
        <a class="item" href="/forum/create_cat.php">Create a category</a>
         
        <div id="userbar">
        <div id="userbar" href="cikis.php"> Log out.</div>
    </div>
        <div id="content">
        



        </div>
        

</center>







        </div>  </div>
</div>  </div>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    </head>
 
    <body>    
       <div id="uyari" title="Topluluk Kuralları" style="display:none;">
            <p><center>
            Topluluk Kuralları
</center></p>
            <img src="123.png" width="100%">
        </div>
                 
        <!-- Script -->
         <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
       
        <script>
            $(function(){
                // sayfa açılışında dialog kutusunun gelmesi için her hangi bir buton için yerleştirmedik
                $("#uyari").dialog({
                    width:600, //dialog kutusunun genişliği
                    modal:true, //arkaplanın koyu olması
                    popup.onload = $(function() {
  setTimeout(function() {
    popup.close();
  }, 2000));
};, //gerek yok ama otomatik açılması için
                    position:  { my: "center", at: "center" } //konum
                });
            }})};
 


        </script>
    </body>
</html>
 


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<center>
            
      <div style="background-color: lightblue; lightblue; box-shadow: 2px 5px 3px limegreen; font-color: white;" class="card p 9 " id="footer1" align="center">
        <p>2023. TheStudent. ©All rights reserved. Created by <a href="https://github.com/cesurh?"  target="_blank"  rel="nofollow">Cesur Huseynzade</a>.</p>
    </div>
</center>