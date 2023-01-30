<?php

include("baglanti.php")
?>
<?php

$username_err="";
$email_err="";
$okul_err="";
$sifre_err="";
$repass_err="";
$pn_err="";

if(isset($_POST["sumbit"]))

{
  // Kullanıcı adı doğrulama
  if(empty($_POST["kullanici_adi"]))
  {
    $username_err="Kullanıcı adı boş geçilemez.";
  }
  else if(strlen($_POST["kullanici_adi"])<10)
  {
    $username_err="Kullanıcı adı en az 10 karakter olmalıdır.";
  }
  else if(strlen($_POST["kullanici_adi"])>25)
  {
    $username_err="Kullanıcı adı en fazla 25 karakter olmalıdır.";
  }
 
    else{
      $username=$_POST[kullanici_adi];
    }


    // Email doğrulama
    if(empty($_POST["e_mail"]))
    {
      $email_err="Email boş geçilemez.";
    }
    else if (!filter_var($_POST["e_mail"], FILTER_VALIDATE_EMAIL)) {
      $email_err = "Geçersiz email formatı.";
    }
  else if(strlen($_POST["e_mail"])>25)
  {
    $email_err="Email adresi en fazla 25 karakter olmalıdır.";
  }
    else{
      $email=$_POST[e_mail];
    }


           // numara
  if(empty($_POST["numara"]))
  {
    $pn_err="Numara  boş geçilemez.";
  }
  else if(strlen($_POST["numara"])>12)
  {
    $pn_err="Numaranız  en fazla 12 karakter olmalıdır.";
  }
 
 
    else{
      $numara=$_POST[numara];
    }


       // Okul adı doğrulama
  if(empty($_POST["okul_adi"]))
  {
    $okul_err="Okul adı boş geçilemez.";
  }
  else if(strlen($_POST["okul_adi"])<6)
  {
    $okul_err="Okul adı en az 6 karakter olmalıdır.";
  }
  else if(strlen($_POST["okul_adi"])>25)
  {
    $okul_err="Okul adı en fazla 25 karakter olmalıdır.";
  }
 
    else{
      $okul_adi=$_POST[okul_adi];
    }


    // Parola doğrulama
    if(empty($_POST["sifre"]))
    {
      $sifre_err="Lütfen şifre giriniz.";
    }
  else if(strlen($_POST["sifre"])>21)
  {
    $sifre_err="Şifreniz en fazla 21 karakter olmalıdır.";
  }
    else{
      $sifre=password_hash($_POST["sifre"],PASSWORD_DEFAULT);
    }

    // REPASS doğrulama
    if(empty($_POST["sifretkr"]))
    {
      $repass_err="Lütfen şifrenizi doğrulayınız.";
    }
    else if($_POST["sifre"]!=$_POST["sifretkr"])
    {
      $repass_err="Şifreler eşleşmiyor.";
    }
    else{
      $sifretkr=$_POST["sifretkr"];
    }









  if(isset($username) && isset($e_mail) && isset($numara) && isset($okul_adi) && isset($sifre) && isset($sifretkr))
  {



    $name=$_POST["kullaniciadi"];
    $email=$_POST["email"];

    $ekle="INSERT INTO `#veritabanı` (`id`, `kullanici`, `e_mail`, `numara`,  `okula_di`, `sifre`) VALUES (NULL, '$username', '$e_mail', '$numara', '$okul_adi', '$sifre')";
    $calistirekle = mysqli_query($baglanti,$ekle);
    

    if($calistirekle) {
        echo '<div class="alert alert-success" role="alert">
        Kayıt başarılı bir şekilde eklendi
      </div>';
    }
    else{
      echo '<div class="alert alert-danger" role="alert">
      Kaydınız eklenirken bir hata oluştu.
      Lütfen Tekrar Deneyin
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

    <title>ÜYE KAYIT İŞLEMİ</title>
   <style>
  
   </style>
  </head>
  <body style="background-color: lightgrey;">
  
      <br>
  <center><div id="123345" style="float:  center;">
<img src="rbglogo.png" style="float:; padding:0 0px 0px 0;" class="flex-shrink-0 me-3"  alt="Logo" />
</div>
<div >
  <div class="" style="background-color:; border-size: 510px;" name="grup" class="d-flex position-relative"  role="group" aria-label="Basic outlined example">
  
  
  <button type="button"  name="anasayfa" onclick="window.location.href = 'home.php'; " class="btn btn-outline-danger">Anasayfa</button>
  <button type="button"  name="enler" class="btn btn-outline-info">En'ler</button>
  <button type="button"  name="giris" onClick="parent.location='login.php'"  class="btn btn-outline-secondary">Giriş Yap</button>
  <button type="button"  name="sss" class="btn btn-outline-primary">SSS</button>
  <button type="button"  name="bizkimiz" class="btn btn-outline-success">Biz kimiz</button>
</div>
</div>
</center>
<br>
<br>
<br>

    <center><h2 style="color:; ">Fırsat eşitsizliğine karşı Türkiyenin 1 Numarası</h2></center>
    <div  class="container p-5">
        <div style="box-shadow: 2px 5px 3px limegreen; " class="card p-5">
        
        <center><big><h3 style="color: red; ">Yeni Bir Hesap Oluştur</h3></center>

        <center><h5 style="color: grey; ">Hızlı ve kolaydır!</h5></big></center>

                    <form action="kayit.php" style="background: #fff;" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control 
                
                <?php
                if(!empty($username_err))
                {
                  echo "is-invalid";
                }
                ?>
                "
                id="exampleInputEmail1" name="kullanici_adi" maxlength="20" minlength="10">
                <div class="invalid-feedback">
        <?php 
      echo $username_err;  
        ?>
      </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control 
                
                <?php
                if(!empty($email_err))
                {
                  echo "is-invalid";
                }
                ?>
                "
                
                id="exampleInputEmail1" aria-describedby="emailHelp" name="e_mail" placeholder="@ " maxlength="35" minlength="15">
                <div class="invalid-feedback">
        <?php
      echo $email_err;
      ?>
      </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputnumara" class="form-label">Phone number</label>
                <input type="tel" class="form-control 
               
               <?php
                if(!empty($pn_err))
                {
                  echo "is-invalid";
                }
                ?>
                "
                
                id="exampleInputEmail1" aria-describedby="emailHelp" name="numara" placeholder="0########## gibi yazınız " maxlength="11" minlength="10">
                <div class="invalid-feedback">
        <?php
      echo $pn_err;
      ?>
      </div>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputokul1"  class="form-label">Okul</label>
                <input type="text" class="form-control 

                <?php
                if(!empty($okul_err))
                {
                  echo "is-invalid";
                }
                ?>
                
                
                "
                
                id="exampleInputokul1" name="okul_adi" maxlength="40" minlength="15">
                <div class="invalid-feedback">
        <?php
      echo $okul_err;
      ?>
      </div>

            <div class="mb-3">
                <label for="exampleInputPassword1"  class="form-label">Password</label>
                <input type="password" class="form-control 

                <?php
                if(!empty($sifre_err))
                {
                  echo "is-invalid";
                }
                ?>
                
                
                "
                
                id="exampleInputPassword1" name="sifre" placeholder="🔑" maxlength="20" minlength="6">
                <div class="invalid-feedback">
        <?php
      echo $sifre_err;
      ?>
      </div>

      <div style="float: left;" class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Re password</label>
                <input type="password" class="form-control  

                <?php
                if(!empty($repass_err))
                {
                  echo "is-invalid";
                }
                ?>
                
                
              s
               " id="exampleInputPassword1" name="sifretkr" maxlength="20" minlength="6">
                <div class="invalid-feedback">
        <?php
      echo $repass_err;
        ?>
     
      </div><br><center>
           <div  class="col-12">
    <div  class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to <a href="home.php">terms</a> and <a href="home.php">conditions</a>
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
   
              </center>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" name="sumbit" style="font-size: 25px;" align="center" class="btn btn-primary">Email doğrulama</button>
              </div>
            </form>

        </div>
        <center>
            <h5 style="text-size-adjust: 8px; color: blue; border-radius: 170px; text-decoration: underline;">Yeni Nesil Kar Amacı Gütmeyen Eğitim Platformu.</h5>
        <small><h5 style="color: green; text-decoration: underline;">Mesajlarınız asla 3.Taraf ile paylaşılmaz veya satılmaz.</h5></small>
</center>
    </div><br><br>
    
    </div><center>
    <div style="background-color: lightblue; box-shadow: 2px 5px 3px limegreen; font-color: white;" class="card p 9 " id="footer" align="center">
        <p>2023. TheStudent. ©All rights reserved. Created by <a href="https://github.com/cesurh?" rel="nofollow">Cesur Huseynzade</a>.</p>
    </div></center>

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
