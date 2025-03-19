<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Değişkenler</title>
</head>

<h3>Global Değişkenler</h3>    
<h4>$_POST</h4>

<form action=""method="POST">

   
    <label for=""> Kullanıcı Adı :</label>
    <input type="text" name="username" id="kullanici">
    <br>
    <br>

    <label for="">Şifrenizi Gİriniz</label>
    <input type="password" name="" id="sifre">
    <br>
    <input type="submit" value="Giriş Yap">

</form>
<?php

$kullanici_adi      =@$_POST["username"];
$kullanici_sifresi  =@$_POST["password"];

echo"formdan gelen kullanıcı Adı: $kullanici_adi <br>";
echo"formdan gelen kullanıcı şifresi: $kullanici_sifresi <br>";

if ($kullanici_adi == "Ali"and $kullanici_sifresi==123) {
    echo "Kullanıcı Adı Ve Şifresi Doğru";

}
    

?>

</body>
</html>