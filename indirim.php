<?php

$urun = 'Kareli Defter'; $urun_fiyat = '4.50'; $urun_adet = 20;
if($urun_adet < 15) {
	$indirim = 0;
} elseif (($urun_adet >= 15) && ($urun_adet <= 59)){
	$indirim = 5;
}

$toplam = $urun_fiyat * $urun_adet;

$net_fiyat = $indirim ? $toplam - $toplam * ($indirim / 100 ) : $toplam;

$toplam = sprintf('%0.2f', $toplam);

$net_fiayat = sprintf('%0.2f', $net_fiyat);

$durum = $indirim ? "%$indirim indirim ile <s>
$toplam</s> TL yerine" : '';

echo "<div>$urun_adet Adet <b>Ürün</b> $durum $net_fiyat TL</div>";

?>