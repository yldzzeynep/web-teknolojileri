<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DERSLERİ</title>
</head>

<body>
    <?php

    // phpinfo();

    echo "Aydın  Adnan Menderes Üniversitesi myo bilgisayar programcılığı";

    // PHP içerisinde html etiketi kullanılabilir 
    echo "<br>Aydın  Adnan Menderes Üniversitesi <br> myo bilgisayar programcılığı";

    echo "<br>Aydın  Adnan Menderes Üniversitesi <br> myo bilgisayar programcılığı";
    
    $metin="<br>Aydın  Adnan Menderes Üniversitesi";

     echo $metin;
     //değişken içerisindeki metinsel ifadenn büyük küçük harf dönüşümleri

     //echo strtoupper($metin);
     echo $bharf = strtoupper($metin);
     echo $kharf = strtolower($bharf);

     echo $bharf2 = mb_strtoupper($metin);
     echo $kharf = mb_strtolower($bharf)


    ?>

</body>

</html>