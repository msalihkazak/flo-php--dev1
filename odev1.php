<?php
function agil ($agilSayisi, $agiKapasitesi, $toplamHayvanSayisi)
{


    $kalanHayvanSayisi =0;
    $agil =0;

    for ($i = 0; $i < $agilSayisi; $i++)
    {
        if ($i == 0 && $toplamHayvanSayisi > $agiKapasitesi)
        {
            $agil = $agiKapasitesi;
            $kalanHayvanSayisi = $toplamHayvanSayisi -$agiKapasitesi;
        }
        elseif ($kalanHayvanSayisi == 0 && $i !=0)
        {
            $agil = $kalanHayvanSayisi;
        }
        elseif ($kalanHayvanSayisi<$agiKapasitesi && $i !=0)
        {
            $agil = $kalanHayvanSayisi;
            $kalanHayvanSayisi = 0;
        }
        elseif ($toplamHayvanSayisi > $agiKapasitesi)
        {
            $agil =$agiKapasitesi;
            $kalanHayvanSayisi= $kalanHayvanSayisi - $agiKapasitesi;
        }
        else
        {
            $agil = $toplamHayvanSayisi;

        }
        echo ($i +1).'. ağıl : '.$agil.'<br>';
    }
}

echo agil(5,30, 73);