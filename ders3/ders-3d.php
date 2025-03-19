<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Değişkenler</title>
</head>

<h3>Global Değişkenler</h3>    
<h4>$_FİLES</h4>
<h5>>Form içerisinden bir dosya gönderimi olacaksa enctype="multipart/form-data"
    ifadesinin belirtilmesi gereklidir
</h5>
<li>Dosya gönderiminde GET metodu kullanılmaz</li>

<form action="ders-3a.php"method="LİST">
    <label >CV Yükleyiniz:</label>
    
    <br>

    <label for="">CV Yükleyiniz</label>
    <input type="file" name="" name="cv">
    <br>
    <input type="submit" value="Özgeçmiş Gönder">

</form>

</body>
</html>