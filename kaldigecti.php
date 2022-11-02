<?php

$ogrenciler = array

(
    array("adsoyad" => "Salih Kazak", "vize" => "60", "final" => "70" ),
    array("adsoyad" => "Mehmet Kazak", "vize" => "40", "final" => "75" ),
    array("adsoyad" => "Ahmet Kazak", "vize" => "60", "final" => "63" ),
    array("adsoyad" => "Ali Kazak", "vize" => "20", "final" => "76" ),
    array("adsoyad" => "İsmet Kazak", "vize" => "10", "final" => "27" ),
    array("adsoyad" => "Ökkeş Kazak", "vize" => "80", "final" => "19" ),
    array("adsoyad" => "Tayfun Kazak", "vize" => "90", "final" => "100" ),
);
foreach ($ogrenciler as $ogreci)
{
    $ortalama = ($ogreci["vize"] + $ogreci["final"]) / 2;
    if ($ortalama >= 60 )
    {
        $sonuc = "Geçti";
    }
    else
    {
        $sonuc ="Kaldı";
    }
    echo "Ad Soyad:" .$ogreci["adsoyad"]."<br>";
   echo "Vize:" .$ogreci["vize"]."<br>";
   echo "Final:" .$ogreci["final"]."<br>";
   echo "Ortalama:" .$ortalama ."<br>";
   echo "Durum: " .$sonuc;
   echo "<br> <hr> <br>";
}

?>