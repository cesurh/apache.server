# apache.server

#  Dosyaları çalıştırmak için bilgisayaranızda apache sunucusunun yüklü olması gerekir.
dosyalari incelediyseniz baglanti.php dosyasının olmadğını görmüşsünüzdür localhost sunucu baglantısı için 

<?php
    $sunucu_adi = "localhost";
    $kullanici_adi = "root";
    $sifre = "#sifreniz";
    $veri_tabani = "#veritabanı_ dı";
    $baglanti = new mysqli($sunucu_adi, $kullanici_adi, $sifre, $veri_tabani, 3306);

    if($baglanti->connect_error)
        die("Bağlantı sağlanamadı:".$baglanti->connect_error);
    /*else
      echo "Bağlantı başarılı";*/
?>

bu kodları kopyalayıp baglanti.php dosyasına kaydederseniz sistem çalışacaktır
