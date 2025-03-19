<?php


$gelenDosya=$_FİLES["cv"];

echo "<pre>";
print_r($gelenDosya);
echo "</pre>";


echo"Gelen Dosya Adı" . $gelenDosya["name"]. "<br>";
echo"Gelen Dosya Adı" . $gelenDosya["type"]. "<br>";
echo"Gelen Dosya Adı" . $gelenDosya["tmp_name"]. "<br>";
echo"Gelen Dosya Adı" . $gelenDosya["size"]. "<br>";