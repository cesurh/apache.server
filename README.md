# apache.server

# <h1 style="color: red;">I delete the files cause they had a cyber security vulnerability</h1>





  Dosyaları çalıştırmak için bilgisayaranızda apache sunucusunun yüklü olması gerekir.
dosyalari incelediyseniz baglanti.php dosyasının olmadğını görmüşsünüzdür localhost sunucu baglantısı için 

<?php
    $sunucu_adi = "localhost";
    $kullanici_adi = "root";
    $sifre = "#sifreniz";
    $veri_tabani = "#veritabanı_adı";
    $baglanti = new mysqli($sunucu_adi, $kullanici_adi, $sifre, $veri_tabani, 3306);

    if($baglanti->connect_error)
        die("Bağlantı sağlanamadı:".$baglanti->connect_error);
    /*else
      echo "Bağlantı başarılı";*/
?>

bu kodları kopyalayıp baglanti.php dosyasına kaydederseniz sistem çalışacaktır
