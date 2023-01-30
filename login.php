<?php

include("baglanti.php")
?>
<?php

$username_err="";
$parola_err="";


if(isset($_POST["giris"]))

{
  // Kullanıcı adı doğrulama
  if(empty($_POST["kullaniciadi"]))
  {
    $username_err="Kullanıcı adı boş geçilemez.";
  }
  
 
    else{
      $username=$_POST[kullaniciadi];
    }


    

    // Parola doğrulama
    if(empty($_POST["parola"]))
    {
      $parola_err="Lütfen şifre giriniz.";
    }
    else{
      $parola=($_POST["parola"]);
    }

    









  if(isset($username) && isset($parola))
  {
  
    $secim = "SELECT * FROM kullanicilar WHERE kullanici_adi = '$username'";
    $calistir=mysqli_query($baglanti , $secim);
    $kayitsayisi = mysqli_num_rows($calistir);

    if($kayitsayisi>0)
    {
        $ilgilikayit = mysqli_fetch_assoc($calistir);
        $hashlisifre=$ilgilikayit["parola"];


        if(password_verify($parola,$hashlisifre))
        {
            session_start();
            $_SESSION["username"]=$ilgilikayit["kullanici_adi"];
            $_SESSION["email"]=$ilgilikayit["email"];
            $_SESSION["nmara"]=$ilgilikayit["nmara"];
            $_SESSION["okuladi"]=$ilgilikayit["okuladi"];
            $_SESSION["id"]=$ilgilikayit["id"];
            header("location:profil.php");

        
        }
        else{
            echo '<div class="alert alert-Danger" role="alert">
        Şifreniz yanlış.
      </div>';
        }
    }
    else
    {
        echo '<div class="alert alert-Danger" role="alert">
        Kullanıcı adı yanlış.
      </div>';
    }



   

    mysqli_close($baglanti);
}
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


    <title>Giriş Yap</title>
    <style>
      
      



    </style>
  </head>
  <body style="background-color: lightgrey;">
  <br>
  <center><div id="123345" style="float:  center;">
<img src="rbglogo.png"  alt="Logo" />
</div>
  <div class="" style="background-color:; border-size: 510px;" name="grup"  role="group" aria-label="Basic outlined example">
  <button type="button" name="anasayfa" onclick="window.location.href = 'home.php'; " class="btn btn-outline-danger">Anasayfa</button>
  <button type="button" name="enler" class="btn btn-outline-info">En'ler</button>
  <button type="button" name="giris" onClick="parent.location='kayit.php'"  class="btn btn-outline-secondary">Kayıt Yap</button>
  <button type="button" name="sss" class="btn btn-outline-primary">SSS</button>
  <button type="button" name="bizkimiz" class="btn btn-outline-success">Biz kimiz</button>
</div>
</center>
<br>

<br>
    <div class="container p-5">
        <div style="box-shadow: 2px 5px 3px orange;" class="card p-5">
        <center><h2 style="color: green;">Giriş Yap</h2></center>
        <br><br>

                    <form action="login.php" method="POST">
            <div class="mb-3"><?php
if(isset($_SESSION["username"]))
{

    echo "<center><h1 style='color:Brown;'>Zaten Giriş Yaptınız</h1></center>";
    
}
else
{
    
}
?>
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control 
                
                <?php
                if(!empty($username_err))
                {
                  echo "is-invalid";
                }
                ?>
                "
                id="exampleInputEmail1" name="kullaniciadi">
                <div class="invalid-feedback">
        <?php 
      echo $username_err;  
        ?>
      </div>
            </div>

            

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control 

                <?php
                if(!empty($parola_err))
                {
                  echo "is-invalid";
                }
                ?>
                
                
                "
                
                id="exampleInputPassword1" name="parola">
                <div class="invalid-feedback">
        <?php
      echo $parola_err;
      ?>
      </div>

      <br>

      
                
                
                
                

      <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" name="giris" style="font-size: 25px;" class="btn btn-primary">Giriş yap</button>
            </form>
              </div>

        </div>
        <center>
        <h5 style="text-size-adjust: 8px; color: blue; border-radius: 170px; text-decoration: underline;">Yeni Nesil Kar Amacı Gütmeyen Eğitim Platformu.</h5>
        <small><h5 style="color: green; text-decoration: underline;">Mesajlarınız asla 3.Taraf ile paylaşılmaz veya satılmaz.</h5></small>
          <br>
              </center>
    </div>

    <center>
            
      <div style="background-color: lightblue; lightblue; box-shadow: 2px 5px 3px limegreen; font-color: white;" class="card p 9 " id="footer" align="center">
        <p>2023. TheStudent. ©All rights reserved. Design by <a href="https://github.com/cesurh?" rel="nofollow">Cesur Huseynzade</a>.</p>
    </div>
</center>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    -->
  </body>
</html>