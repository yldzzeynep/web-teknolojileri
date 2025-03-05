<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Uygulama:</h4>
    <p>Lorem Metninin ilk 100 karakterini alın devamında bir buton yerleştirerek adü web sitesine yönlendirin.</p>
    <h3>Sık Kullanılan Hazır Fonksiyonlar</h3>
    <?php

    $metin = "<br>Aydın  Adnan Menderes Üniversitesi <br> myo bilgisayar programcılığı</b>";
    $byazi = strtoupper($metin);  //Yazıyı büyük harfe dönüştürür
    $kyazi = strtolower($byazi);   //Yazıyı küçük harfe dönüştürür
    $mb_byazi = mb_strtoupper($kyazi); //Yazıyı büyük harfe dönüştürür
    $mb_kyazi = mb_strtolower($mb_byazi);  //Yazıyı küçük harfe dönüştürür
    $ilkharf_buyuk_metin = ucfirst($mb_kyazi);  // Gelen metnin ilk harfi büyük
    $ilkharf_buyuk_kelime = ucwords($mb_kyazi);  //Gelen metnin kelimelerinin ilk harfleri büyük

    echo "<br>Karakter Sayısı:" . strlen($metin);
    echo "<br> Metnin Belirli Bir Karakter Sayısı:" . substr($metin, 0, 24);
    echo $metin;
    echo "<br>";

    ?>
    <?php
$lorem="sdrftyuıopğü";
echo substr($lorem,0,97) ;
echo '<a href="https://www.adu.edu.tr/" target="_blank"> Devamını Oku </a>';
    ?>

</body>

</html>