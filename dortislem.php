<?php

function hesap ($sayi1=0, $sayi2=0 ,$islem="" )
{
        switch ($islem){
            case "+":
                $sonuc = $sayi1 + $sayi2 ;
                $mesaj = "Toplama Sonuçu ($sayi1 + $sayi2):" .$sonuc;
                break;
            case "-":
                $sonuc = $sayi1 - $sayi2 ;
                $mesaj = "Çıkarma Sonuçu ($sayi1 - $sayi2):" .$sonuc;
                break;
            case  "*":
                $sonuc = $sayi1 * $sayi2 ;
                $mesaj = "Çarpma Sonuçu ($sayi1 * $sayi2):" .$sonuc;
                break;
            case "/":
                $sonuc = $sayi1 / $sayi2 ;
                $mesaj = "Bölme Sonuçu ($sayi1 / $sayi2):" .$sonuc;
                break;

            default :
                 $mesaj = "Hatalı İşlem";
                break;
        }

        return $mesaj;
}
echo "İşlem Sonucu: " .hesap(17,20, "+");
?>