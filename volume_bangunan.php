<?php
//rumus
$phi = 3.14;
$bagi = 3;
$r =  7.2;
$tinggi_t = 20;
$tinggi_k = 5;


//tabung
print "=====Volume Tabung=====\n";
$volume_tabung = $phi * $r * $r * $tinggi_t ;
print " volume tabung \n phi = 3.14 \n r = 7,2m \n t = 20 \n";
echo  'volume_tabung ='.round($volume_tabung,1)."m3\n";

//phytagoras
print "\n=====phytagoras=====";
$a = 7.2;
$b = 5;
$c = sqrt(pow($a,2)+pow($b,2));
print "\n a = 7,2m \n b = 5m \n";
echo  'c ='.round($c,1)."m3\n";

//kerucut
print "\n=====Volume Kerucut=====";
$volume_kerucut = $phi* pow($r,2) * $tinggi_k / 3;
print "\n 1/3 \n phi = 3.14 \n r = 7,2m \n t = 5m \n";
echo  'volume_kerucut ='.round($volume_kerucut,1)."m3\n";

//lingkaran alas
print "\n=====Alas Lingkaran=====";
$lingkaran = $phi * pow($r,2) /100;
print "\n luas lingkaran \n phi = 3,14 \n r = 7,2m \n";
echo  'lingkaran ='.round($lingkaran,1)."m3\n";

//gabngan
print "\n=====Volume gabungan=====";
$hasil_gabungan = $volume_tabung + $volume_kerucut - $lingkaran;
print "\n gabungan dari kedua bangun ruang \n";
echo  'volume_gabungan ='.round($hasil_gabungan,1)."m3\n";